console.log('ready to roll');

var navToggle = {
    init: function() {
        this.menuOpen = false;
        this.navWrap = document.querySelector('.nav');
        this.navBtn = document.querySelector('.menu-flyout-btn');
        this.bindDOM();
    },
    bindDOM: function() {
        this.navBtn.addEventListener('click', this.toggleMenu.bind(this));
    },
    toggleMenu: function() {
        if (this.menuOpen) {
            this.closeMenu();
        } else {
            this.openMenu();
        }
    },
    openMenu: function() {
        this.navWrap.classList.add('open');
        this.menuOpen = true;
    },
    closeMenu: function() {
        this.navWrap.classList.remove('open');
        this.menuOpen = false;
    }
}

navToggle.init();