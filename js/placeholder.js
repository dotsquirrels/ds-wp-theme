var dataPlaceholders = document.querySelectorAll("input[placeholder]"),
	l = dataPlaceholders.length,
	
	// Set caret at the beginning of the input
	setCaret = function (evt) {
		if (this.value === this.getAttribute("data-placeholder")) {
			this.setSelectionRange(0, 0);
			evt.preventDefault();
			evt.stopPropagation();
			return false;
		}
	},
	
	// Clear placeholder value at user input
	clearPlaceholder = function (evt) {
		if (!(evt.shiftKey && evt.keyCode === 16) && evt.keyCode !== 9) {
			if (this.value === this.getAttribute("data-placeholder")) {
				this.value = "";
				this.className = "active";
				if (this.getAttribute("data-type") === "password") {
					this.type = "password";
				}
			}
		} 
	},

	restorePlaceHolder = function () {
		if (this.value.length === 0) {
			this.value = this.getAttribute("data-placeholder");
			setCaret.apply(this, arguments);
			this.className = "";
			if (this.type === "password") {
				this.type = "text";
			}
		}
	},

	clearPlaceholderAtSubmit = function (evt) {
		for (var i=0, placeholder; i<l; i++) {
			placeholder = dataPlaceholders[i];
			if (placeholder.value === placeholder.getAttribute("data-placeholder")) {
				placeholder.value = "";
			}
		}
	};

	for (var i=0, placeholder, placeholderVal; i<l; i++) {
		placeholder = dataPlaceholders[i];
		placeholderVal = placeholder.getAttribute("placeholder");
		placeholder.setAttribute("data-placeholder", placeholderVal);
		placeholder.removeAttribute("placeholder");
		
		if (placeholder.value.length === 0) {
			placeholder.value = placeholderVal;
			if (placeholder.type === "password") {
				placeholder.type = "text";
			}
		}
		else {
			placeholder.className = "active";
		}
	
	// Apply events for placeholder handling         
	placeholder.addEventListener("focus", setCaret, false);
	placeholder.addEventListener("drop", setCaret, false);
	placeholder.addEventListener("click", setCaret, false);
	placeholder.addEventListener("keydown", clearPlaceholder, false);
	placeholder.addEventListener("keyup", restorePlaceHolder, false);
	placeholder.addEventListener("blur", restorePlaceHolder, false);
	
	// Clear all default placeholder values from the form at submit
	placeholder.form.addEventListener("submit", clearPlaceholderAtSubmit, false);
}