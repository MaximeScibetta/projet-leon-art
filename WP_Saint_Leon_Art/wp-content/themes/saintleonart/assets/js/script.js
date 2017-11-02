;(function(){'use strict';var targetDate=new Date("2018/08/19 18:00:00");var days;var hrs;var min;var sec;$(function(){timeToLaunch();numberTransition('#days .number',days,1000,'easeOutQuad');numberTransition('#hours .number',hrs,1000,'easeOutQuad');numberTransition('#minutes .number',min,1000,'easeOutQuad');setTimeout(countDownTimer,1001);});function timeToLaunch(){var currentDate=new Date();var diff=(currentDate-targetDate)/1000;var diff=Math.abs(Math.floor(diff));days=Math.floor(diff/(24*60*60));sec=diff-days*24*60*60;hrs=Math.floor(sec/(60*60));sec=sec-hrs*60*60;min=Math.floor(sec/60);sec=sec-min*60;}function countDownTimer(){timeToLaunch();$("#days .number").text(days);$("#hours .number").text(hrs);$("#minutes .number").text(min);setTimeout(countDownTimer,1000);}function numberTransition(id,endPoint,transitionDuration,transitionEase){$({numberCount:$(id).text()}).animate({numberCount:endPoint},{duration:transitionDuration,easing:transitionEase,step:function step(){$(id).text(Math.floor(this.numberCount));},complete:function complete(){$(id).text(this.numberCount);}});};var myCenter=new google.maps.LatLng(12.2667,-2.06667);function initialize(){var mapProp={center:myCenter,zoom:7,mapTypeId:google.maps.MapTypeId.ROADMAP};var map=new google.maps.Map(document.getElementById("map"),mapProp);var marker=new google.maps.Marker({position:myCenter});marker.setMap(map);}google.maps.event.addDomListener(window,'load',initialize);var hamburger=document.querySelector('.hamburger');var search=document.querySelector('.search-icon');hamburger.addEventListener('click',function(e){e.stopPropagation();e.preventDefault();hamburger.classList.toggle('is-active');document.body.classList.toggle('has-sidebar');});search.addEventListener('click',function(e){e.stopPropagation();e.preventDefault();search.classList.toggle('open');search.parentNode.classList.toggle('open');});var buttons=document.querySelectorAll('.program__navigation a');Array.from(buttons).forEach(function($btn){$btn.addEventListener("click",fActive);});function fActive(e){e.stopPropagation();if(document.querySelector('.active')){document.querySelector('.active').classList.remove('active');}e.currentTarget.classList.add('active');};var fCheckForm=function fCheckForm(){var $Form=document.querySelector('form.contact');var $FirstNameField=document.getElementById('first_name');var $LastNameField=document.getElementById('last_name');var $EmailField=document.getElementById('email');var $MsgField=document.getElementById('message');var $SubmitBtn=document.getElementById('submit');var regexpName=/^[a-zA-Z\u00C0-\u00FF]+['-]?[a-zA-Z\u00C0-\u00FF]+$/;var regexpEmail=/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;var regexpMsg=/^([a-zA-Z]{2,40} + [a-zA-Z]{2,40})$/;var fCheckAField=function fCheckAField(field,regexp){if(field.value==''){field.parentNode.querySelector('span').innerHTML="Votre champs de formulaire est vide.";field.parentNode.querySelector('span').classList.add('on');return false;}else if(regexp&&!regexp.test(field.value)){field.parentNode.querySelector('span').innerHTML="Il semble que la valeur rentré ait un problème.";field.parentNode.querySelector('span').classList.add('on');return false;}else{$SubmitBtn.removeAttribute('disabled');field.parentNode.querySelector('span').classList.remove('on');field.parentNode.querySelector('.input').classList.add('ok');return true;}};var fCheckFirstName=function fCheckFirstName(){return fCheckAField($FirstNameField,regexpName);};var fCheckLastName=function fCheckLastName(){return fCheckAField($LastNameField,regexpName);};var fCheckEmail=function fCheckEmail(){return fCheckAField($EmailField,regexpEmail);};var fCheckMessage=function fCheckMessage(){if($MsgField.value.split(/\s+/).length>=3){$MsgField.parentNode.querySelector('span').classList.remove('on');$MsgField.parentNode.querySelector('.input').classList.add('ok');return true;}if($MsgField.value.split(/\s+/).length===1){$MsgField.parentNode.querySelector('span').innerHTML="Vous n'avez pas écrit de message.";$MsgField.parentNode.querySelector('span').classList.add('on');return false;}if($MsgField.value.split(/\s+/).length<5){$MsgField.parentNode.querySelector('span').innerHTML="Vous avez pas écris un assez grand message.";$MsgField.parentNode.querySelector('span').classList.add('on');return false;}};var fCheckAll=function fCheckAll(){if(fCheckFirstName()*fCheckLastName()*fCheckEmail()*fCheckMessage()){$Form.classList.add('valid');}};$FirstNameField.addEventListener('blur',fCheckFirstName,false);$LastNameField.addEventListener('blur',fCheckLastName,false);$EmailField.addEventListener('blur',fCheckEmail,false);$MsgField.addEventListener('blur',fCheckMessage,false);$SubmitBtn.addEventListener('click',fCheckAll,false);var input=document.querySelectorAll('fieldset .input');var getFocus=function getFocus(oEvent){oEvent.currentTarget.parentNode.querySelector('label').classList.add("focus");};var outFocus=function outFocus(e){if(e.currentTarget.parentNode.querySelector('.input').value.length===0||e.currentTarget.parentNode.querySelector('.input option').value.length===0){e.currentTarget.parentNode.querySelector('label').classList.remove("focus");}};Array.from(input).forEach(function($label){$label.addEventListener("focus",getFocus);$label.addEventListener("click",getFocus);$label.addEventListener("blur",outFocus);});};var fCancelAnchor=function fCancelAnchor(e){e.preventDefault();};var bullets=document.querySelectorAll('.bullets_nav');Array.from(bullets).forEach(function($btn){$btn.addEventListener("click",fCancelAnchor);var translateValue=$btn.getAttribute('data-translateValue');$btn.addEventListener('click',function(){if($btn.parentNode.querySelector('.active')){$btn.parentNode.querySelector('.active').classList.remove('active');}document.querySelector('.slider').style.transform='translateX('+translateValue+')';$btn.classList.add('active');});});var prevNext=document.querySelectorAll('.prevNext div a');Array.from(prevNext).forEach(function($prevNext){$prevNext.addEventListener("click",fCancelAnchor);var translateValue=$prevNext.getAttribute('data-translateValue');$prevNext.addEventListener("click",function(){document.querySelector('.slider').style.transform='translateX('+translateValue+')';var prevNextParent=$prevNext.parentNode.parentNode;prevNextParent.childNodes[$prevNext.getAttribute('data-next')].style.visibility='visible';prevNextParent.childNodes[$prevNext.getAttribute('data-prec')].style.visibility='hidden';});});var img=document.querySelectorAll('.slider div');})();
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNjcmlwdC5qcyJdLCJuYW1lcyI6WyJ0YXJnZXREYXRlIiwiRGF0ZSIsImRheXMiLCJocnMiLCJtaW4iLCJzZWMiLCIkIiwidGltZVRvTGF1bmNoIiwibnVtYmVyVHJhbnNpdGlvbiIsInNldFRpbWVvdXQiLCJjb3VudERvd25UaW1lciIsImN1cnJlbnREYXRlIiwiZGlmZiIsIk1hdGgiLCJhYnMiLCJmbG9vciIsInRleHQiLCJpZCIsImVuZFBvaW50IiwidHJhbnNpdGlvbkR1cmF0aW9uIiwidHJhbnNpdGlvbkVhc2UiLCJudW1iZXJDb3VudCIsImFuaW1hdGUiLCJkdXJhdGlvbiIsImVhc2luZyIsInN0ZXAiLCJjb21wbGV0ZSIsIm15Q2VudGVyIiwiZ29vZ2xlIiwibWFwcyIsIkxhdExuZyIsImluaXRpYWxpemUiLCJtYXBQcm9wIiwiY2VudGVyIiwiem9vbSIsIm1hcFR5cGVJZCIsIk1hcFR5cGVJZCIsIlJPQURNQVAiLCJtYXAiLCJNYXAiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwibWFya2VyIiwiTWFya2VyIiwicG9zaXRpb24iLCJzZXRNYXAiLCJldmVudCIsImFkZERvbUxpc3RlbmVyIiwid2luZG93IiwiaGFtYnVyZ2VyIiwicXVlcnlTZWxlY3RvciIsInNlYXJjaCIsImFkZEV2ZW50TGlzdGVuZXIiLCJlIiwic3RvcFByb3BhZ2F0aW9uIiwicHJldmVudERlZmF1bHQiLCJjbGFzc0xpc3QiLCJ0b2dnbGUiLCJib2R5IiwicGFyZW50Tm9kZSIsImJ1dHRvbnMiLCJxdWVyeVNlbGVjdG9yQWxsIiwiQXJyYXkiLCJmcm9tIiwiZm9yRWFjaCIsIiRidG4iLCJmQWN0aXZlIiwicmVtb3ZlIiwiY3VycmVudFRhcmdldCIsImFkZCIsImZDaGVja0Zvcm0iLCIkRm9ybSIsIiRGaXJzdE5hbWVGaWVsZCIsIiRMYXN0TmFtZUZpZWxkIiwiJEVtYWlsRmllbGQiLCIkTXNnRmllbGQiLCIkU3VibWl0QnRuIiwicmVnZXhwTmFtZSIsInJlZ2V4cEVtYWlsIiwicmVnZXhwTXNnIiwiZkNoZWNrQUZpZWxkIiwiZmllbGQiLCJyZWdleHAiLCJ2YWx1ZSIsImlubmVySFRNTCIsInRlc3QiLCJyZW1vdmVBdHRyaWJ1dGUiLCJmQ2hlY2tGaXJzdE5hbWUiLCJmQ2hlY2tMYXN0TmFtZSIsImZDaGVja0VtYWlsIiwiZkNoZWNrTWVzc2FnZSIsInNwbGl0IiwibGVuZ3RoIiwiZkNoZWNrQWxsIiwiaW5wdXQiLCJnZXRGb2N1cyIsIm9FdmVudCIsIm91dEZvY3VzIiwiJGxhYmVsIiwiZkNhbmNlbEFuY2hvciIsImJ1bGxldHMiLCJ0cmFuc2xhdGVWYWx1ZSIsImdldEF0dHJpYnV0ZSIsInN0eWxlIiwidHJhbnNmb3JtIiwicHJldk5leHQiLCIkcHJldk5leHQiLCJwcmV2TmV4dFBhcmVudCIsImNoaWxkTm9kZXMiLCJ2aXNpYmlsaXR5IiwiaW1nIl0sIm1hcHBpbmdzIjoiMEJBR0ksR0FBSUEsWUFBYSxHQUFJQyxLQUFKLENBQVMscUJBQVQsQ0FBakIsQ0FHQSxHQUFJQyxLQUFKLENBQ0EsR0FBSUMsSUFBSixDQUNBLEdBQUlDLElBQUosQ0FDQSxHQUFJQyxJQUFKLENBS0FDLEVBQUUsVUFBVyxDQUVUQyxlQUVBQyxpQkFBaUIsZUFBakIsQ0FBa0NOLElBQWxDLENBQXdDLElBQXhDLENBQThDLGFBQTlDLEVBQ0FNLGlCQUFpQixnQkFBakIsQ0FBbUNMLEdBQW5DLENBQXdDLElBQXhDLENBQThDLGFBQTlDLEVBQ0FLLGlCQUFpQixrQkFBakIsQ0FBcUNKLEdBQXJDLENBQTBDLElBQTFDLENBQWdELGFBQWhELEVBRUFLLFdBQVdDLGNBQVgsQ0FBMEIsSUFBMUIsRUFDSCxDQVRELEVBZUEsUUFBU0gsYUFBVCxFQUF1QixDQUVuQixHQUFJSSxhQUFjLEdBQUlWLEtBQUosRUFBbEIsQ0FHQSxHQUFJVyxNQUFPLENBQUNELFlBQWNYLFVBQWYsRUFBMkIsSUFBdEMsQ0FDQSxHQUFJWSxNQUFPQyxLQUFLQyxHQUFMLENBQVNELEtBQUtFLEtBQUwsQ0FBV0gsSUFBWCxDQUFU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R0FBTW9DLFVBQVdqRSxTQUFTcUIsZ0JBQVQsQ0FBMEIsaUJBQTFCLENBQWpCLENBRUFDLE1BQU1DLElBQU4sQ0FBVzBDLFFBQVgsRUFBcUJ6QyxPQUFyQixDQUE2QixTQUFTMEMsU0FBVCxDQUFvQixDQUM3Q0EsVUFBVXRELGdCQUFWLENBQTJCLE9BQTNCLENBQW9DK0MsYUFBcEMsRUFFQSxHQUFNRSxnQkFBaUJLLFVBQVVKLFlBQVYsQ0FBdUIscUJBQXZCLENBQXZCLENBRUFJLFVBQVV0RCxnQkFBVixDQUEyQixPQUEzQixDQUFvQyxVQUFLLENBQ3JDWixTQUFTVSxhQUFULENBQXVCLFNBQXZCLEVBQWtDcUQsS0FBbEMsQ0FBd0NDLFNBQXhDLGVBQWtFSCxjQUFsRSxLQUNBLEdBQU1NLGdCQUFpQkQsVUFBVS9DLFVBQVYsQ0FBcUJBLFVBQTVDLENBQ0FnRCxlQUFlQyxVQUFmLENBQTBCRixVQUFVSixZQUFWLENBQXVCLFdBQXZCLENBQTFCLEVBQStEQyxLQUEvRCxDQUFxRU0sVUFBckUsQ0FBa0YsU0FBbEYsQ0FDQUYsZUFBZUMsVUFBZixDQUEwQkYsVUFBVUosWUFBVixDQUF1QixXQUF2QixDQUExQixFQUErREMsS0FBL0QsQ0FBcUVNLFVBQXJFLENBQWtGLFFBQWxGLENBRUgsQ0FORCxFQU9ILENBWkQsRUFjQSxHQUFNQyxLQUFNdEUsU0FBU3FCLGdCQUFULENBQTBCLGFBQTFCLENBQVosQyIsImZpbGUiOiJzY3JpcHQuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvLyBDb3VudGRvd24gaG9tZSBwYWdlXHJcbiAgICAvKiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSovXHJcbiAgICAvLyBUaGUgZGF0ZSB5b3Ugd2FudCB0byBjb3VudCBkb3duIHRvXHJcbiAgICB2YXIgdGFyZ2V0RGF0ZSA9IG5ldyBEYXRlKFwiMjAxOC8wOC8xOSAxODowMDowMFwiKTsgICBcclxuXHJcbiAgICAvLyBPdGhlciBkYXRlIHJlbGF0ZWQgdmFyaWFibGVzXHJcbiAgICB2YXIgZGF5cztcclxuICAgIHZhciBocnM7XHJcbiAgICB2YXIgbWluO1xyXG4gICAgdmFyIHNlYztcclxuXHJcbiAgICAvKiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxyXG4gICAgKiBPTiBET0NVTUVOVCBMT0FEXHJcbiAgICAqIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tICovXHJcbiAgICAkKGZ1bmN0aW9uKCkge1xyXG4gICAgICAgIC8vIENhbGN1bGF0ZSB0aW1lIHVudGlsIGxhdW5jaCBkYXRlXHJcbiAgICAgICAgdGltZVRvTGF1bmNoKCk7XHJcbiAgICAgICAgLy8gVHJhbnNpdGlvbiB0aGUgY3VycmVudCBjb3VudGRvd24gZnJvbSAwIFxyXG4gICAgICAgIG51bWJlclRyYW5zaXRpb24oJyNkYXlzIC5udW1iZXInLCBkYXlzLCAxMDAwLCAnZWFzZU91dFF1YWQnKTtcclxuICAgICAgICBudW1iZXJUcmFuc2l0aW9uKCcjaG91cnMgLm51bWJlcicsIGhycywgMTAwMCwgJ2Vhc2VPdXRRdWFkJyk7XHJcbiAgICAgICAgbnVtYmVyVHJhbnNpdGlvbignI21pbnV0ZXMgLm51bWJlcicsIG1pbiwgMTAwMCwgJ2Vhc2VPdXRRdWFkJyk7XHJcbiAgICAgICAgLy8gQmVnaW4gQ291bnRkb3duXHJcbiAgICAgICAgc2V0VGltZW91dChjb3VudERvd25UaW1lciwxMDAxKTtcclxuICAgIH0pO1xyXG5cclxuICAgIC8qIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXHJcbiAgICAqIEZJR1VSRSBPVVQgVEhFIEFNT1VOVCBPRiBcclxuICAgIFRJTUUgTEVGVCBCRUZPUkUgTEFVTkNIXHJcbiAgICAqIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tICovXHJcbiAgICBmdW5jdGlvbiB0aW1lVG9MYXVuY2goKXtcclxuICAgICAgICAvLyBHZXQgdGhlIGN1cnJlbnQgZGF0ZVxyXG4gICAgICAgIHZhciBjdXJyZW50RGF0ZSA9IG5ldyBEYXRlKCk7XHJcblxyXG4gICAgICAgIC8vIEZpbmQgdGhlIGRpZmZlcmVuY2UgYmV0d2VlbiBkYXRlc1xyXG4gICAgICAgIHZhciBkaWZmID0gKGN1cnJlbnREYXRlIC0gdGFyZ2V0RGF0ZSkvMTAwMDtcclxuICAgICAgICB2YXIgZGlmZiA9IE1hdGguYWJzKE1hdGguZmxvb3IoZGlmZikpOyAgXHJcblxyXG4gICAgICAgIC8vIENoZWNrIG51bWJlciBvZiBkYXlzIHVudGlsIHRhcmdldFxyXG4gICAgICAgIGRheXMgPSBNYXRoLmZsb29yKGRpZmYvKDI0KjYwKjYwKSk7XHJcbiAgICAgICAgc2VjID0gZGlmZiAtIGRheXMgKiAyNCo2MCo2MDtcclxuXHJcbiAgICAgICAgLy8gQ2hlY2sgbnVtYmVyIG9mIGhvdXJzIHVudGlsIHRhcmdldFxyXG4gICAgICAgIGhycyA9IE1hdGguZmxvb3Ioc2VjLyg2MCo2MCkpO1xyXG4gICAgICAgIHNlYyA9IHNlYyAtIGhycyAqIDYwKjYwO1xyXG5cclxuICAgICAgICAvLyBDaGVjayBudW1iZXIgb2YgbWludXRlcyB1bnRpbCB0YXJnZXRcclxuICAgICAgICBtaW4gPSBNYXRoLmZsb29yKHNlYy8oNjApKTtcclxuICAgICAgICBzZWMgPSBzZWMgLSBtaW4gKiA2MDtcclxuICAgIH1cclxuXHJcbiAgICAvKiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxyXG4gICAgKiBESVNQTEFZIFRIRSBDVVJSRU5UIFxyXG4gICAgQ09VTlQgVE8gTEFVTkNIXHJcbiAgICAqIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tICovXHJcbiAgICBmdW5jdGlvbiBjb3VudERvd25UaW1lcigpeyBcclxuICAgICAgICBcclxuICAgICAgICAvLyBGaWd1cmUgb3V0IHRoZSB0aW1lIHRvIGxhdW5jaFxyXG4gICAgICAgIHRpbWVUb0xhdW5jaCgpO1xyXG4gICAgICAgIFxyXG4gICAgICAgIC8vIFdyaXRlIHRvIGNvdW50ZG93biBjb21wb25lbnRcclxuICAgICAgICAkKCBcIiNkYXlzIC5udW1iZXJcIiApLnRleHQoZGF5cyk7XHJcbiAgICAgICAgJCggXCIjaG91cnMgLm51bWJlclwiICkudGV4dChocnMpO1xyXG4gICAgICAgICQoIFwiI21pbnV0ZXMgLm51bWJlclwiICkudGV4dChtaW4pO1xyXG4gICAgICAgIFxyXG4gICAgICAgIC8vIFJlcGVhdCB0aGUgY2hlY2sgZXZlcnkgc2Vjb25kXHJcbiAgICAgICAgc2V0VGltZW91dChjb3VudERvd25UaW1lciwxMDAwKTtcclxuICAgIH1cclxuXHJcbiAgICAvKiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxyXG4gICAgKiBUUkFOU0lUSU9OIE5VTUJFUlMgRlJPTSAwXHJcbiAgICBUTyBDVVJSRU5UIFRJTUUgVU5USUwgTEFVTkNIXHJcbiAgICAqIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tICovXHJcbiAgICBmdW5jdGlvbiBudW1iZXJUcmFuc2l0aW9uKGlkLCBlbmRQb2ludCwgdHJhbnNpdGlvbkR1cmF0aW9uLCB0cmFuc2l0aW9uRWFzZSl7XHJcbiAgICAgICAgLy8gVHJhbnNpdGlvbiBudW1iZXJzIGZyb20gMCB0byB0aGUgZmluYWwgbnVtYmVyXHJcbiAgICAgICAgJCh7bnVtYmVyQ291bnQ6ICQoaWQpLnRleHQoKX0pLmFuaW1hdGUoe251bWJlckNvdW50OiBlbmRQb2ludH0sIHtcclxuICAgICAgICAgICAgZHVyYXRpb246IHRyYW5zaXRpb25EdXJhdGlvbixcclxuICAgICAgICAgICAgZWFzaW5nOnRyYW5zaXRpb25FYXNlLFxyXG4gICAgICAgICAgICBzdGVwOiBmdW5jdGlvbigpIHtcclxuICAgICAgICAgICAgICAgICQoaWQpLnRleHQoTWF0aC5mbG9vcih0aGlzLm51bWJlckNvdW50KSk7XHJcbiAgICAgICAgICAgIH0sXHJcbiAgICAgICAgICAgIGNvbXBsZXRlOiBmdW5jdGlvbigpIHtcclxuICAgICAgICAgICAgICAgICQoaWQpLnRleHQodGhpcy5udW1iZXJDb3VudCk7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9KTsgXHJcbiAgICB9O1xyXG4vKiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSovXHJcbi8vIEdvb2dsZSBtYXAgaW5kaXZpZHVhbFxyXG4vKiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSovXHJcbiAgICB2YXIgbXlDZW50ZXIgPSBuZXcgZ29vZ2xlLm1hcHMuTGF0TG5nKDEyLjI2NjcsIC0yLjA2NjY3KTtcclxuICAgIGZ1bmN0aW9uIGluaXRpYWxpemUoKSB7XHJcbiAgICAgICAgdmFyIG1hcFByb3AgPSB7XHJcbiAgICAgICAgICAgIGNlbnRlcjogbXlDZW50ZXIsXHJcbiAgICAgICAgICAgIHpvb206IDcsXHJcbiAgICAgICAgICAgIG1hcFR5cGVJZDogZ29vZ2xlLm1hcHMuTWFwVHlwZUlkLlJPQURNQVBcclxuICAgICAgICB9O1xyXG4gICAgICAgIHZhciBtYXAgPSBuZXcgZ29vZ2xlLm1hcHMuTWFwKGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwibWFwXCIpLCBtYXBQcm9wKTtcclxuICAgICAgICB2YXIgbWFya2VyID0gbmV3IGdvb2dsZS5tYXBzLk1hcmtlcih7XHJcbiAgICAgICAgICAgIHBvc2l0aW9uOiBteUNlbnRlcixcclxuICAgICAgICB9KTtcclxuICAgICAgICBtYXJrZXIuc2V0TWFwKG1hcCk7XHJcbiAgICB9XHJcbiAgICBnb29nbGUubWFwcy5ldmVudC5hZGREb21MaXN0ZW5lcih3aW5kb3csICdsb2FkJywgaW5pdGlhbGl6ZSk7XHJcbi8qIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tKi9cclxuLy8gSGFtYnVyZ2VyIG1lbnUgYW5kIHNpZGViYXJcclxuLyogLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0qL1xyXG4gICAgY29uc3QgaGFtYnVyZ2VyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLmhhbWJ1cmdlcicpO1xyXG4gICAgY29uc3Qgc2VhcmNoID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLnNlYXJjaC1pY29uJylcclxuXHJcbiAgICBoYW1idXJnZXIuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbihlKSB7XHJcbiAgICAgICAgZS5zdG9wUHJvcGFnYXRpb24oKVxyXG4gICAgICAgIGUucHJldmVudERlZmF1bHQoKVxyXG4gICAgICAgIGhhbWJ1cmdlci5jbGFzc0xpc3QudG9nZ2xlKCdpcy1hY3RpdmUnKVxyXG4gICAgICAgIGRvY3VtZW50LmJvZHkuY2xhc3NMaXN0LnRvZ2dsZSgnaGFzLXNpZGViYXInKVxyXG4gICAgfSk7XHJcblxyXG4gICAgc2VhcmNoLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24oZSkge1xyXG4gICAgICAgIGUuc3RvcFByb3BhZ2F0aW9uKClcclxuICAgICAgICBlLnByZXZlbnREZWZhdWx0KClcclxuICAgICAgICBzZWFyY2guY2xhc3NMaXN0LnRvZ2dsZSgnb3BlbicpXHJcbiAgICAgICAgc2VhcmNoLnBhcmVudE5vZGUuY2xhc3NMaXN0LnRvZ2dsZSgnb3BlbicpO1xyXG4gICAgfSk7XHJcbi8qIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tKi9cclxuLy8gRXZlbnQgbWVudVxyXG4vKiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSovXHJcbiAgICBjb25zdCBidXR0b25zID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLnByb2dyYW1fX25hdmlnYXRpb24gYScpO1xyXG5cclxuICAgIEFycmF5LmZyb20oYnV0dG9ucykuZm9yRWFjaChmdW5jdGlvbigkYnRuKSB7XHJcbiAgICAgICAgJGJ0bi5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgZkFjdGl2ZSk7XHJcbiAgICB9KTtcclxuXHJcbiAgICBmdW5jdGlvbiBmQWN0aXZlKGUpIHtcclxuICAgICAgICBlLnN0b3BQcm9wYWdhdGlvbigpO1xyXG4gICAgICAgIC8vZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG4gICAgICAgIGlmKCAgZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLmFjdGl2ZScpICl7XHJcbiAgICAgICAgICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5hY3RpdmUnKS5jbGFzc0xpc3QucmVtb3ZlKCdhY3RpdmUnKTtcclxuICAgICAgICB9XHJcbiAgICAgICAgZS5jdXJyZW50VGFyZ2V0LmNsYXNzTGlzdC5hZGQoJ2FjdGl2ZScpO1xyXG4gICAgfTtcclxuLyogLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0qL1xyXG4vLyBGb3JtIGNvbnRhY3QgZmVlZGJhY2sgYW5kIGZvY3VzXHJcbi8qIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tKi9cclxuICAgIHZhciBmQ2hlY2tGb3JtID0gZnVuY3Rpb24gZkNoZWNrRm9ybSgpIHtcclxuICAgICAgICB2YXIgJEZvcm0gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdmb3JtLmNvbnRhY3QnKTtcclxuICAgICAgICB2YXIgJEZpcnN0TmFtZUZpZWxkID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2ZpcnN0X25hbWUnKTtcclxuICAgICAgICB2YXIgJExhc3ROYW1lRmllbGQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbGFzdF9uYW1lJyk7XHJcbiAgICAgICAgdmFyICRFbWFpbEZpZWxkID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2VtYWlsJyk7XHJcbiAgICAgICAgdmFyICRNc2dGaWVsZCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdtZXNzYWdlJyk7XHJcbiAgICAgICAgdmFyICRTdWJtaXRCdG4gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnc3VibWl0Jyk7XHJcbiAgICAgICAgdmFyIHJlZ2V4cE5hbWUgPSAvXlthLXpBLVpcXHUwMEMwLVxcdTAwRkZdK1snLV0/W2EtekEtWlxcdTAwQzAtXFx1MDBGRl0rJC87XHJcbiAgICAgICAgdmFyIHJlZ2V4cEVtYWlsID0gL14oW2EtejAtOV9cXC4tXSspQChbXFxkYS16XFwuLV0rKVxcLihbYS16XFwuXXsyLDZ9KSQvO1xyXG4gICAgICAgIHZhciByZWdleHBNc2cgPSAvXihbYS16QS1aXXsyLDQwfSArIFthLXpBLVpdezIsNDB9KSQvO1xyXG4gICAgICAgIHZhciBmQ2hlY2tBRmllbGQgPSBmdW5jdGlvbiBmQ2hlY2tBRmllbGQoZmllbGQsIHJlZ2V4cCkge1xyXG4gICAgICAgICAgICBpZiAoZmllbGQudmFsdWUgPT0gJycpIHtcclxuICAgICAgICAgICAgICAgIGZpZWxkLnBhcmVudE5vZGUucXVlcnlTZWxlY3Rvcignc3BhbicpLmlubmVySFRNTCA9IFwiVm90cmUgY2hhbXBzIGRlIGZvcm11bGFpcmUgZXN0IHZpZGUuXCI7XHJcbiAgICAgICAgICAgICAgICBmaWVsZC5wYXJlbnROb2RlLnF1ZXJ5U2VsZWN0b3IoJ3NwYW4nKS5jbGFzc0xpc3QuYWRkKCdvbicpO1xyXG4gICAgICAgICAgICAgICAgcmV0dXJuIGZhbHNlO1xyXG4gICAgICAgICAgICB9IGVsc2UgaWYgKHJlZ2V4cCAmJiAhcmVnZXhwLnRlc3QoZmllbGQudmFsdWUpKSB7XHJcbiAgICAgICAgICAgICAgICBmaWVsZC5wYXJlbnROb2RlLnF1ZXJ5U2VsZWN0b3IoJ3NwYW4nKS5pbm5lckhUTUwgPSBcIklsIHNlbWJsZSBxdWUgbGEgdmFsZXVyIHJlbnRyw6kgYWl0IHVuIHByb2Jsw6htZS5cIjtcclxuICAgICAgICAgICAgICAgIGZpZWxkLnBhcmVudE5vZGUucXVlcnlTZWxlY3Rvcignc3BhbicpLmNsYXNzTGlzdC5hZGQoJ29uJyk7XHJcbiAgICAgICAgICAgICAgICByZXR1cm4gZmFsc2U7XHJcbiAgICAgICAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgICAgICAgICAkU3VibWl0QnRuLnJlbW92ZUF0dHJpYnV0ZSgnZGlzYWJsZWQnKTtcclxuICAgICAgICAgICAgICAgIGZpZWxkLnBhcmVudE5vZGUucXVlcnlTZWxlY3Rvcignc3BhbicpLmNsYXNzTGlzdC5yZW1vdmUoJ29uJyk7XHJcbiAgICAgICAgICAgICAgICBmaWVsZC5wYXJlbnROb2RlLnF1ZXJ5U2VsZWN0b3IoJy5pbnB1dCcpLmNsYXNzTGlzdC5hZGQoJ29rJyk7XHJcbiAgICAgICAgICAgICAgICByZXR1cm4gdHJ1ZTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH07XHJcbiAgICAgICAgdmFyIGZDaGVja0ZpcnN0TmFtZSA9IGZ1bmN0aW9uIGZDaGVja0ZpcnN0TmFtZSgpIHtcclxuICAgICAgICAgICAgcmV0dXJuIGZDaGVja0FGaWVsZCgkRmlyc3ROYW1lRmllbGQsIHJlZ2V4cE5hbWUpO1xyXG4gICAgICAgIH07XHJcbiAgICAgICAgdmFyIGZDaGVja0xhc3ROYW1lID0gZnVuY3Rpb24gZkNoZWNrTGFzdE5hbWUoKSB7XHJcbiAgICAgICAgICAgIHJldHVybiBmQ2hlY2tBRmllbGQoJExhc3ROYW1lRmllbGQsIHJlZ2V4cE5hbWUpO1xyXG4gICAgICAgIH07XHJcbiAgICAgICAgdmFyIGZDaGVja0VtYWlsID0gZnVuY3Rpb24gZkNoZWNrRW1haWwoKSB7XHJcbiAgICAgICAgICAgIHJldHVybiBmQ2hlY2tBRmllbGQoJEVtYWlsRmllbGQsIHJlZ2V4cEVtYWlsKTtcclxuICAgICAgICB9O1xyXG4gICAgICAgIHZhciBmQ2hlY2tNZXNzYWdlID0gZnVuY3Rpb24gZkNoZWNrTWVzc2FnZSgpIHtcclxuICAgICAgICAgICAgaWYgKCRNc2dGaWVsZC52YWx1ZS5zcGxpdCgvXFxzKy8pLmxlbmd0aCA+PSAzKSB7XHJcbiAgICAgICAgICAgICAgICAkTXNnRmllbGQucGFyZW50Tm9kZS5xdWVyeVNlbGVjdG9yKCdzcGFuJykuY2xhc3NMaXN0LnJlbW92ZSgnb24nKTtcclxuICAgICAgICAgICAgICAgICRNc2dGaWVsZC5wYXJlbnROb2RlLnF1ZXJ5U2VsZWN0b3IoJy5pbnB1dCcpLmNsYXNzTGlzdC5hZGQoJ29rJyk7XHJcbiAgICAgICAgICAgICAgICByZXR1cm4gdHJ1ZTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBpZiAoJE1zZ0ZpZWxkLnZhbHVlLnNwbGl0KC9cXHMrLykubGVuZ3RoID09PSAxKSB7XHJcbiAgICAgICAgICAgICAgICAkTXNnRmllbGQucGFyZW50Tm9kZS5xdWVyeVNlbGVjdG9yKCdzcGFuJykuaW5uZXJIVE1MID0gXCJWb3VzIG4nYXZleiBwYXMgw6ljcml0IGRlIG1lc3NhZ2UuXCI7XHJcbiAgICAgICAgICAgICAgICAkTXNnRmllbGQucGFyZW50Tm9kZS5xdWVyeVNlbGVjdG9yKCdzcGFuJykuY2xhc3NMaXN0LmFkZCgnb24nKTtcclxuICAgICAgICAgICAgICAgIHJldHVybiBmYWxzZTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBpZiAoJE1zZ0ZpZWxkLnZhbHVlLnNwbGl0KC9cXHMrLykubGVuZ3RoIDwgNSkge1xyXG4gICAgICAgICAgICAgICAgJE1zZ0ZpZWxkLnBhcmVudE5vZGUucXVlcnlTZWxlY3Rvcignc3BhbicpLmlubmVySFRNTCA9IFwiVm91cyBhdmV6IHBhcyDDqWNyaXMgdW4gYXNzZXogZ3JhbmQgbWVzc2FnZS5cIjtcclxuICAgICAgICAgICAgICAgICRNc2dGaWVsZC5wYXJlbnROb2RlLnF1ZXJ5U2VsZWN0b3IoJ3NwYW4nKS5jbGFzc0xpc3QuYWRkKCdvbicpO1xyXG4gICAgICAgICAgICAgICAgcmV0dXJuIGZhbHNlO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfTtcclxuICAgICAgICB2YXIgZkNoZWNrQWxsID0gZnVuY3Rpb24gZkNoZWNrQWxsKCkge1xyXG4gICAgICAgICAgICBpZiAoZkNoZWNrRmlyc3ROYW1lKCkgKiBmQ2hlY2tMYXN0TmFtZSgpICogZkNoZWNrRW1haWwoKSAqIGZDaGVja01lc3NhZ2UoKSApIHtcclxuICAgICAgICAgICAgICAgICRGb3JtLmNsYXNzTGlzdC5hZGQoJ3ZhbGlkJyk7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9O1xyXG5cclxuICAgICAgICAkRmlyc3ROYW1lRmllbGQuYWRkRXZlbnRMaXN0ZW5lcignYmx1cicsIGZDaGVja0ZpcnN0TmFtZSwgZmFsc2UpO1xyXG4gICAgICAgICRMYXN0TmFtZUZpZWxkLmFkZEV2ZW50TGlzdGVuZXIoJ2JsdXInLCBmQ2hlY2tMYXN0TmFtZSwgZmFsc2UpO1xyXG4gICAgICAgICRFbWFpbEZpZWxkLmFkZEV2ZW50TGlzdGVuZXIoJ2JsdXInLCBmQ2hlY2tFbWFpbCwgZmFsc2UpO1xyXG4gICAgICAgICRNc2dGaWVsZC5hZGRFdmVudExpc3RlbmVyKCdibHVyJywgZkNoZWNrTWVzc2FnZSwgZmFsc2UpO1xyXG4gICAgICAgICRTdWJtaXRCdG4uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmQ2hlY2tBbGwsIGZhbHNlKTtcclxuXHJcbiAgICAgICAgdmFyIGlucHV0ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnZmllbGRzZXQgLmlucHV0Jyk7XHJcbiAgICAgICAgdmFyIGdldEZvY3VzID0gZnVuY3Rpb24gZ2V0Rm9jdXMob0V2ZW50KSB7XHJcbiAgICAgICAgICAgIG9FdmVudC5jdXJyZW50VGFyZ2V0LnBhcmVudE5vZGUucXVlcnlTZWxlY3RvcignbGFiZWwnKS5jbGFzc0xpc3QuYWRkKFwiZm9jdXNcIik7XHJcbiAgICAgICAgfTtcclxuICAgICAgICB2YXIgb3V0Rm9jdXMgPSBmdW5jdGlvbiBvdXRGb2N1cyhlKSB7XHJcbiAgICAgICAgICAgIGlmIChlLmN1cnJlbnRUYXJnZXQucGFyZW50Tm9kZS5xdWVyeVNlbGVjdG9yKCcuaW5wdXQnKS52YWx1ZS5sZW5ndGggPT09IDAgfHwgZS5jdXJyZW50VGFyZ2V0LnBhcmVudE5vZGUucXVlcnlTZWxlY3RvcignLmlucHV0IG9wdGlvbicpLnZhbHVlLmxlbmd0aCA9PT0gMCApIHtcclxuICAgICAgICAgICAgICAgIGUuY3VycmVudFRhcmdldC5wYXJlbnROb2RlLnF1ZXJ5U2VsZWN0b3IoJ2xhYmVsJykuY2xhc3NMaXN0LnJlbW92ZShcImZvY3VzXCIpO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfTtcclxuICAgICAgICBBcnJheS5mcm9tKGlucHV0KS5mb3JFYWNoKGZ1bmN0aW9uKCRsYWJlbCkge1xyXG4gICAgICAgICAgICAkbGFiZWwuYWRkRXZlbnRMaXN0ZW5lcihcImZvY3VzXCIsIGdldEZvY3VzKTtcclxuICAgICAgICAgICAgJGxhYmVsLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCBnZXRGb2N1cyk7XHJcbiAgICAgICAgICAgICRsYWJlbC5hZGRFdmVudExpc3RlbmVyKFwiYmx1clwiLCBvdXRGb2N1cyk7XHJcbiAgICAgICAgfSk7XHJcbiAgICB9O1xyXG4gICAgLy9mQ2hlY2tGb3JtKCk7XHJcbi8qIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tKi9cclxuLy8gQ2FuY2VsIGFuY2hvclxyXG4vKiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSovXHJcblxyXG4gICAgY29uc3QgZkNhbmNlbEFuY2hvciA9IGZ1bmN0aW9uKGUpe1xyXG4gICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcclxuICAgIH1cclxuXHJcbiAgICBjb25zdCBidWxsZXRzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLmJ1bGxldHNfbmF2Jyk7XHJcblxyXG4gICAgLy8gUmVtb3ZlIHN0eWxlIG9mIGZpcnN0IGNoaWxkIGJ1bGxldHNcclxuICAgIC8vYnVsbGV0c1swXS5zdHlsZS5iYWNrZ3JvdW5kID0gJ3JnYmEoMjU1LCAyNTUsIDI1NSwgMC41KSc7IFxyXG5cclxuICAgIEFycmF5LmZyb20oYnVsbGV0cykuZm9yRWFjaChmdW5jdGlvbigkYnRuKSB7XHJcbiAgICAgICAgJGJ0bi5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgZkNhbmNlbEFuY2hvcik7XHJcbiAgICAgICAgY29uc3QgdHJhbnNsYXRlVmFsdWUgPSAkYnRuLmdldEF0dHJpYnV0ZSgnZGF0YS10cmFuc2xhdGVWYWx1ZScpO1xyXG4gICAgICAgICRidG4uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoKSA9PntcclxuICAgICAgICAgICAgaWYoICRidG4ucGFyZW50Tm9kZS5xdWVyeVNlbGVjdG9yKCcuYWN0aXZlJykgKXtcclxuICAgICAgICAgICAgICAgICRidG4ucGFyZW50Tm9kZS5xdWVyeVNlbGVjdG9yKCcuYWN0aXZlJykuY2xhc3NMaXN0LnJlbW92ZSgnYWN0aXZlJyk7XHJcbiAgICAgICAgICAgICAgICBcclxuICAgICAgICAgICAgfVxyXG5cclxuICAgICAgICAgICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLnNsaWRlcicpLnN0eWxlLnRyYW5zZm9ybSA9IGB0cmFuc2xhdGVYKCR7dHJhbnNsYXRlVmFsdWV9KWA7XHJcblxyXG4gICAgICAgICAgICAkYnRuLmNsYXNzTGlzdC5hZGQoJ2FjdGl2ZScpO1xyXG4gICAgICAgIH0pO1xyXG4gICAgfSk7XHJcbiAgICBcclxuICAgIGNvbnN0IHByZXZOZXh0ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLnByZXZOZXh0IGRpdiBhJyk7XHJcblxyXG4gICAgQXJyYXkuZnJvbShwcmV2TmV4dCkuZm9yRWFjaChmdW5jdGlvbigkcHJldk5leHQpIHtcclxuICAgICAgICAkcHJldk5leHQuYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIGZDYW5jZWxBbmNob3IpO1xyXG5cclxuICAgICAgICBjb25zdCB0cmFuc2xhdGVWYWx1ZSA9ICRwcmV2TmV4dC5nZXRBdHRyaWJ1dGUoJ2RhdGEtdHJhbnNsYXRlVmFsdWUnKTtcclxuICAgICAgICBcclxuICAgICAgICAkcHJldk5leHQuYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsICgpID0+e1xyXG4gICAgICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuc2xpZGVyJykuc3R5bGUudHJhbnNmb3JtID0gYHRyYW5zbGF0ZVgoJHt0cmFuc2xhdGVWYWx1ZX0pYDtcclxuICAgICAgICAgICAgY29uc3QgcHJldk5leHRQYXJlbnQgPSAkcHJldk5leHQucGFyZW50Tm9kZS5wYXJlbnROb2RlO1xyXG4gICAgICAgICAgICBwcmV2TmV4dFBhcmVudC5jaGlsZE5vZGVzWyRwcmV2TmV4dC5nZXRBdHRyaWJ1dGUoJ2RhdGEtbmV4dCcpXS5zdHlsZS52aXNpYmlsaXR5ID0gJ3Zpc2libGUnO1xyXG4gICAgICAgICAgICBwcmV2TmV4dFBhcmVudC5jaGlsZE5vZGVzWyRwcmV2TmV4dC5nZXRBdHRyaWJ1dGUoJ2RhdGEtcHJlYycpXS5zdHlsZS52aXNpYmlsaXR5ID0gJ2hpZGRlbic7XHJcbiAgICAgICAgICAgIFxyXG4gICAgICAgIH0pO1xyXG4gICAgfSk7XHJcblxyXG4gICAgY29uc3QgaW1nID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLnNsaWRlciBkaXYnKTtcclxuXHJcblxyXG4gICAgLy8gY29uc3QgZkNhbmNlbEFuY2hvciA9IGZ1bmN0aW9uKGUpe1xyXG4gICAgLy8gICAgIGlmICh3aW5kb3cubG9jYXRpb24uaGFzaCkge1xyXG4gICAgLy8gICAgIHNldFRpbWVvdXQoZnVuY3Rpb24oKSB7XHJcbiAgICAvLyAgICAgICAgIHdpbmRvdy5zY3JvbGxUbyh3aW5kb3cucGFnZVhPZmZzZXQsIHdpbmRvdy5wYWdlWU9mZnNldCk7XHJcbiAgICAvLyAgICAgfSwgMSk7XHJcbiAgICAvLyB9XHJcbiAgICAvLyAgICAgY29uc29sZS5sb2cod2luZG93LnBhZ2VYT2Zmc2V0LCB3aW5kb3cucGFnZVlPZmZzZXQpO1xyXG4gICAgLy8gfVxyXG5cclxuICAgIC8vIGNvbnN0IGJ1bGxldHMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcuYnVsbGV0c19uYXYnKTtcclxuICAgIFxyXG5cclxuICAgIC8vIGNvbnN0IGZQYWdlSXNMb2FkZWQgPSBmdW5jdGlvbigpIHtcclxuICAgIC8vICAgICBBcnJheS5mcm9tKGJ1bGxldHMpLmZvckVhY2goZnVuY3Rpb24oJGJ0bikge1xyXG4gICAgLy8gICAgICAgICAkYnRuLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCBmQ2FuY2VsQW5jaG9yKTtcclxuICAgIC8vICAgICB9KTtcclxuICAgIC8vIH1cclxuICAgIFxyXG4gICAgLy8gd2luZG93LmFkZEV2ZW50TGlzdGVuZXIoXCJsb2FkXCIsIGZQYWdlSXNMb2FkZWQpOyJdfQ==
