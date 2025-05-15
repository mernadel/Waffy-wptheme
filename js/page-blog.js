// JS for Blog Page Template

document.addEventListener('DOMContentLoaded', function() {

    function setPanelFocusability(panel, makeFocusable) {
        const focusableSelector = "a[href], button, input, select, textarea";
        const elements = panel.querySelectorAll(focusableSelector);
        elements.forEach((el) => {
            el.tabIndex = makeFocusable ? 0 : -1;
        });
    }
    
    // On page load, make interactive elements inside each panel non-tabbable.
    document.querySelectorAll(".tabs-content .tab-content").forEach((panel) => {
        setPanelFocusability(panel, false);
    });
    
    // Update the underline indicator to match the active tab.
    function updateIndicator() {
        const activeTab = document.querySelector(".tabs-nav button.active");
        const indicator = document.querySelector(".tab-indicator");
        if (activeTab && indicator) {
            indicator.style.left = activeTab.offsetLeft + "px";
            indicator.style.width = activeTab.offsetWidth + "px";
        }
    }
    
    // Activate a tab by its data-tab value.
    function activateTab(tabId) {
        const tabs = document.querySelectorAll(".tabs-nav button");
        const panels = document.querySelectorAll(".tabs-content .tab-content");
        tabs.forEach((tab) => {
            if (tab.getAttribute("data-tab") === tabId) {
                tab.classList.add("active");
                tab.setAttribute("aria-selected", "true");
            } else {
                tab.classList.remove("active");
                tab.setAttribute("aria-selected", "false");
            }
        });
        panels.forEach((panel) => {
            if (panel.getAttribute("data-tab") === tabId) {
                panel.classList.add("active");
            } else {
                panel.classList.remove("active");
            }
        });
        updateIndicator();
    }
    
    /*
          When a user presses Arrow Down on a tab button,
          enter its panel by making its interactive elements focusable
          and moving focus to the first such element.
        */
    function enterPanelFocusTrap(panel, tabButton) {
        setPanelFocusability(panel, true); // Make elements focusable.
        const focusableSelector = "a[href], button, input, select, textarea";
        let focusableElements = Array.from(
            panel.querySelectorAll(focusableSelector)
        ).filter((el) => el.offsetParent !== null);
        if (focusableElements.length > 0) {
            focusableElements[0].focus();
        }
        // Add a keydown listener to the panel to detect Arrow Up (or Escape) to exit.
        function panelKeydownHandler(e) {
            if (e.key === "ArrowUp" || e.key === "Escape") {
                e.preventDefault();
                exitPanelFocusTrap(panel, panelKeydownHandler);
                tabButton.focus();
            } else if (e.key === "Tab") {
                // Prevent focus from cycling within the panel.
                focusableElements = Array.from(
                    panel.querySelectorAll(focusableSelector)
                ).filter((el) => el.offsetParent !== null);
                if (focusableElements.length === 0) {
                    e.preventDefault();
                    return;
                }
                const firstElement = focusableElements[0];
                const lastElement = focusableElements[focusableElements.length - 1];
                if (e.shiftKey) {
                    if (document.activeElement === firstElement) {
                        e.preventDefault();
                        lastElement.focus();
                    }
                } else {
                    if (document.activeElement === lastElement) {
                        e.preventDefault();
                        firstElement.focus();
                    }
                }
            }
        }
        panel.addEventListener("keydown", panelKeydownHandler);
        // Store the handler for removal later.
        panel._panelKeydownHandler = panelKeydownHandler;
    }
    
    function exitPanelFocusTrap(panel, handler) {
        panel.removeEventListener("keydown", handler);
        delete panel._panelKeydownHandler;
        setPanelFocusability(panel, false); // Make interactive elements non-tabbable again.
    }
    
    // Set up event listeners for tab buttons.
    const tabButtons = document.querySelectorAll(".tabs-nav button");
    tabButtons.forEach((tab) => {
        // Click to activate a tab.
        tab.addEventListener("click", function () {
            const tabId = this.getAttribute("data-tab");
            activateTab(tabId);
        });
        // When Arrow Down is pressed on a tab button, enter its panel.
        tab.addEventListener("keydown", function (e) {
            if (e.key === "ArrowDown") {
                e.preventDefault();
                const tabId = this.getAttribute("data-tab");
                const panel = document.querySelector(
                    '.tabs-content .tab-content[data-tab="' + tabId + '"]'
                );
                if (panel) {
                    enterPanelFocusTrap(panel, this);
                }
            }
        });
    });
    
    window.addEventListener("resize", updateIndicator);
    updateIndicator();
    
});
