"use strict";$(document).ready(function(){$("#wizard1").steps({headerTag:"h3",bodyTag:"section",autoFocus:true,titleTemplate:'<span class="wizard-index">#index#</span> #title#'});$("#wizard2").steps({headerTag:"h3",bodyTag:"section",autoFocus:true,titleTemplate:'<span class="wizard-index">#index#</span> #title#',onStepChanging:function(b,a,e){if(a<e){var c=document.getElementById("form1"),d=document.getElementById("form2");if(a===0){if(c.checkValidity()===false){b.preventDefault();b.stopPropagation();c.classList.add("was-validated")}else{return true}}else{if(a===1){if(d.checkValidity()===false){b.preventDefault();b.stopPropagation();d.classList.add("was-validated")}else{return true}}else{return true}}}else{return true}}})});