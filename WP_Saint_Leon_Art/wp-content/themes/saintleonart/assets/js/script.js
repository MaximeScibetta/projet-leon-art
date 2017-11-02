;(function(){'use strict';var targetDate=new Date("2018/08/19 18:00:00");var days;var hrs;var min;var sec;$(function(){timeToLaunch();numberTransition('#days .number',days,1000,'easeOutQuad');numberTransition('#hours .number',hrs,1000,'easeOutQuad');numberTransition('#minutes .number',min,1000,'easeOutQuad');setTimeout(countDownTimer,1001);});function timeToLaunch(){var currentDate=new Date();var diff=(currentDate-targetDate)/1000;var diff=Math.abs(Math.floor(diff));days=Math.floor(diff/(24*60*60));sec=diff-days*24*60*60;hrs=Math.floor(sec/(60*60));sec=sec-hrs*60*60;min=Math.floor(sec/60);sec=sec-min*60;}function countDownTimer(){timeToLaunch();$("#days .number").text(days);$("#hours .number").text(hrs);$("#minutes .number").text(min);setTimeout(countDownTimer,1000);}function numberTransition(id,endPoint,transitionDuration,transitionEase){$({numberCount:$(id).text()}).animate({numberCount:endPoint},{duration:transitionDuration,easing:transitionEase,step:function step(){$(id).text(Math.floor(this.numberCount));},complete:function complete(){$(id).text(this.numberCount);}});};var myCenter=new google.maps.LatLng(12.2667,-2.06667);function initialize(){var mapProp={center:myCenter,zoom:7,mapTypeId:google.maps.MapTypeId.ROADMAP};var map=new google.maps.Map(document.getElementById("map"),mapProp);var marker=new google.maps.Marker({position:myCenter});marker.setMap(map);}google.maps.event.addDomListener(window,'load',initialize);var hamburger=document.querySelector('.hamburger');var search=document.querySelector('.search-icon');hamburger.addEventListener('click',function(e){e.stopPropagation();e.preventDefault();hamburger.classList.toggle('is-active');document.body.classList.toggle('has-sidebar');});search.addEventListener('click',function(e){e.stopPropagation();e.preventDefault();search.classList.toggle('open');search.parentNode.classList.toggle('open');});var buttons=document.querySelectorAll('.program__navigation a');Array.from(buttons).forEach(function($btn){$btn.addEventListener("click",fActive);});function fActive(e){e.stopPropagation();if(document.querySelector('.active')){document.querySelector('.active').classList.remove('active');}e.currentTarget.classList.add('active');};var fCheckForm=function fCheckForm(){var $Form=document.querySelector('form.contact');var $FirstNameField=document.getElementById('first_name');var $LastNameField=document.getElementById('last_name');var $EmailField=document.getElementById('email');var $MsgField=document.getElementById('message');var $SubmitBtn=document.getElementById('submit');var regexpName=/^[a-zA-Z\u00C0-\u00FF]+['-]?[a-zA-Z\u00C0-\u00FF]+$/;var regexpEmail=/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;var regexpMsg=/^([a-zA-Z]{2,40} + [a-zA-Z]{2,40})$/;var fCheckAField=function fCheckAField(field,regexp){if(field.value==''){field.parentNode.querySelector('span').innerHTML="Votre champs de formulaire est vide.";field.parentNode.querySelector('span').classList.add('on');return false;}else if(regexp&&!regexp.test(field.value)){field.parentNode.querySelector('span').innerHTML="Il semble que la valeur rentré ait un problème.";field.parentNode.querySelector('span').classList.add('on');return false;}else{$SubmitBtn.removeAttribute('disabled');field.parentNode.querySelector('span').classList.remove('on');field.parentNode.querySelector('.input').classList.add('ok');return true;}};var fCheckFirstName=function fCheckFirstName(){return fCheckAField($FirstNameField,regexpName);};var fCheckLastName=function fCheckLastName(){return fCheckAField($LastNameField,regexpName);};var fCheckEmail=function fCheckEmail(){return fCheckAField($EmailField,regexpEmail);};var fCheckMessage=function fCheckMessage(){if($MsgField.value.split(/\s+/).length>=3){$MsgField.parentNode.querySelector('span').classList.remove('on');$MsgField.parentNode.querySelector('.input').classList.add('ok');return true;}if($MsgField.value.split(/\s+/).length===1){$MsgField.parentNode.querySelector('span').innerHTML="Vous n'avez pas écrit de message.";$MsgField.parentNode.querySelector('span').classList.add('on');return false;}if($MsgField.value.split(/\s+/).length<5){$MsgField.parentNode.querySelector('span').innerHTML="Vous avez pas écris un assez grand message.";$MsgField.parentNode.querySelector('span').classList.add('on');return false;}};var fCheckAll=function fCheckAll(){if(fCheckFirstName()*fCheckLastName()*fCheckEmail()*fCheckMessage()){$Form.classList.add('valid');}};$FirstNameField.addEventListener('blur',fCheckFirstName,false);$LastNameField.addEventListener('blur',fCheckLastName,false);$EmailField.addEventListener('blur',fCheckEmail,false);$MsgField.addEventListener('blur',fCheckMessage,false);$SubmitBtn.addEventListener('click',fCheckAll,false);var input=document.querySelectorAll('fieldset .input');var getFocus=function getFocus(oEvent){oEvent.currentTarget.parentNode.querySelector('label').classList.add("focus");};var outFocus=function outFocus(e){if(e.currentTarget.parentNode.querySelector('.input').value.length===0||e.currentTarget.parentNode.querySelector('.input option').value.length===0){e.currentTarget.parentNode.querySelector('label').classList.remove("focus");}};Array.from(input).forEach(function($label){$label.addEventListener("focus",getFocus);$label.addEventListener("click",getFocus);$label.addEventListener("blur",outFocus);});};var fCancelAnchor=function fCancelAnchor(e){e.preventDefault();};var bullets=document.querySelectorAll('.bullets_nav');Array.from(bullets).forEach(function($btn){$btn.addEventListener("click",fCancelAnchor);var translateValue=$btn.getAttribute('data-translateValue');$btn.addEventListener('click',function(){if($btn.parentNode.querySelector('.active')){$btn.parentNode.querySelector('.active').classList.remove('active');}document.querySelector('.slider').style.transform='translateX('+translateValue+')';$btn.classList.add('active');if(document.querySelectorAll('.slider .precNext')){document.querySelectorAll('.slider .precNext')[0].classList.remove('precNext');document.querySelectorAll('.slider .precNext')[0].classList.remove('precNext');}img[$btn.getAttribute('data-prec-img')].classList.toggle('precNext');img[$btn.getAttribute('data-next-img')].classList.toggle('precNext');});});var prevNext=document.querySelectorAll('.prevNext div a');Array.from(prevNext).forEach(function($prevNext){$prevNext.addEventListener("click",fCancelAnchor);var translateValue=$prevNext.getAttribute('data-translateValue');$prevNext.addEventListener("click",function(){document.querySelector('.slider').style.transform='translateX('+translateValue+')';var prevNextParent=$prevNext.parentNode.parentNode;prevNextParent.childNodes[$prevNext.getAttribute('data-next')].style.visibility='visible';prevNextParent.childNodes[$prevNext.getAttribute('data-prec')].style.visibility='hidden';if(document.querySelectorAll('.slider .precNext')){console.log(document.querySelectorAll('.slider .precNext'));document.querySelectorAll('.slider .precNext')[0].classList.remove('precNext');document.querySelectorAll('.slider .precNext')[0].classList.remove('precNext');}img[$prevNext.getAttribute('data-prec-img')].classList.toggle('precNext');img[$prevNext.getAttribute('data-next-img')].classList.toggle('precNext');var btnA=document.querySelectorAll('.bullets_nav');var btn=document.querySelector('.bullets_nav');if(document.querySelector('.bullets .active')){document.querySelector('.bullets .active').classList.remove('active');}btnA[$prevNext.getAttribute('data-focus')].classList.add('active');});});var img=document.querySelectorAll('.slider div');})();
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNjcmlwdC5qcyJdLCJuYW1lcyI6WyJ0YXJnZXREYXRlIiwiRGF0ZSIsImRheXMiLCJocnMiLCJtaW4iLCJzZWMiLCIkIiwidGltZVRvTGF1bmNoIiwibnVtYmVyVHJhbnNpdGlvbiIsInNldFRpbWVvdXQiLCJjb3VudERvd25UaW1lciIsImN1cnJlbnREYXRlIiwiZGlmZiIsIk1hdGgiLCJhYnMiLCJmbG9vciIsInRleHQiLCJpZCIsImVuZFBvaW50IiwidHJhbnNpdGlvbkR1cmF0aW9uIiwidHJhbnNpdGlvbkVhc2UiLCJudW1iZXJDb3VudCIsImFuaW1hdGUiLCJkdXJhdGlvbiIsImVhc2luZyIsInN0ZXAiLCJjb21wbGV0ZSIsIm15Q2VudGVyIiwiZ29vZ2xlIiwibWFwcyIsIkxhdExuZyIsImluaXRpYWxpemUiLCJtYXBQcm9wIiwiY2VudGVyIiwiem9vbSIsIm1hcFR5cGVJZCIsIk1hcFR5cGVJZCIsIlJPQURNQVAiLCJtYXAiLCJNYXAiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwibWFya2VyIiwiTWFya2VyIiwicG9zaXRpb24iLCJzZXRNYXAiLCJldmVudCIsImFkZERvbUxpc3RlbmVyIiwid2luZG93IiwiaGFtYnVyZ2VyIiwicXVlcnlTZWxlY3RvciIsInNlYXJjaCIsImFkZEV2ZW50TGlzdGVuZXIiLCJlIiwic3RvcFByb3BhZ2F0aW9uIiwicHJldmVudERlZmF1bHQiLCJjbGFzc0xpc3QiLCJ0b2dnbGUiLCJib2R5IiwicGFyZW50Tm9kZSIsImJ1dHRvbnMiLCJxdWVyeVNlbGVjdG9yQWxsIiwiQXJyYXkiLCJmcm9tIiwiZm9yRWFjaCIsIiRidG4iLCJmQWN0aXZlIiwicmVtb3ZlIiwiY3VycmVudFRhcmdldCIsImFkZCIsImZDaGVja0Zvcm0iLCIkRm9ybSIsIiRGaXJzdE5hbWVGaWVsZCIsIiRMYXN0TmFtZUZpZWxkIiwiJEVtYWlsRmllbGQiLCIkTXNnRmllbGQiLCIkU3VibWl0QnRuIiwicmVnZXhwTmFtZSIsInJlZ2V4cEVtYWlsIiwicmVnZXhwTXNnIiwiZkNoZWNrQUZpZWxkIiwiZmllbGQiLCJyZWdleHAiLCJ2YWx1ZSIsImlubmVySFRNTCIsInRlc3QiLCJyZW1vdmVBdHRyaWJ1dGUiLCJmQ2hlY2tGaXJzdE5hbWUiLCJmQ2hlY2tMYXN0TmFtZSIsImZDaGVja0VtYWlsIiwiZkNoZWNrTWVzc2FnZSIsInNwbGl0IiwibGVuZ3RoIiwiZkNoZWNrQWxsIiwiaW5wdXQiLCJnZXRGb2N1cyIsIm9FdmVudCIsIm91dEZvY3VzIiwiJGxhYmVsIiwiZkNhbmNlbEFuY2hvciIsImJ1bGxldHMiLCJ0cmFuc2xhdGVWYWx1ZSIsImdldEF0dHJpYnV0ZSIsInN0eWxlIiwidHJhbnNmb3JtIiwiaW1nIiwicHJldk5leHQiLCIkcHJldk5leHQiLCJwcmV2TmV4dFBhcmVudCIsImNoaWxkTm9kZXMiLCJ2aXNpYmlsaXR5IiwiY29uc29sZSIsImxvZyIsImJ0bkEiLCJidG4iXSwibWFwcGluZ3MiOiIwQkFHSSxHQUFJQSxZQUFhLEdBQUlDLEtBQUosQ0FBUyxxQkFBVCxDQUFqQixDQUdBLEdBQUlDLEtBQUosQ0FDQSxHQUFJQyxJQUFKLENBQ0EsR0FBSUMsSUFBSixDQUNBLEdBQUlDLElBQUosQ0FLQUMsRUFBRSxVQUFXLENBRVRDLGVBRUFDLGlCQUFpQixlQUFqQixDQUFrQ04sSUFBbEMsQ0FBd0MsSUFBeEMsQ0FBOEMsYUFBOUMsRUFDQU0saUJBQWlCLGdCQUFqQixDQUFtQ0wsR0FBbkMsQ0FBd0MsSUFBeEMsQ0FBOEMsYUFBOUMsRUFDQUssaUJBQWlCLGtCQUFqQixDQUFxQ0osR0FBckMsQ0FBMEMsSUFBMUMsQ0FBZ0QsYUFBaEQsRUFFQUssV0FBV0MsY0FBWCxDQUEwQixJQUExQixFQUNILENBVEQsRUFlQSxRQUFTSCxhQUFULEVBQXVCLENBRW5CLEdBQUlJLGFBQWMsR0FBSVYsS0FBSixFQUFsQixDQUdBLEdBQUlXLE1BQU8sQ0FBQ0QsWUFBY1gsVUFBZixFQUEyQixJQUF0QyxDQUNBLEdBQUlZLE1BQU9DLEtBQUtDLEdBQUwsQ0FB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c0NvbnRlbnQiOlsiLy8gQ291bnRkb3duIGhvbWUgcGFnZVxyXG4gICAgLyogLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0qL1xyXG4gICAgLy8gVGhlIGRhdGUgeW91IHdhbnQgdG8gY291bnQgZG93biB0b1xyXG4gICAgdmFyIHRhcmdldERhdGUgPSBuZXcgRGF0ZShcIjIwMTgvMDgvMTkgMTg6MDA6MDBcIik7ICAgXHJcblxyXG4gICAgLy8gT3RoZXIgZGF0ZSByZWxhdGVkIHZhcmlhYmxlc1xyXG4gICAgdmFyIGRheXM7XHJcbiAgICB2YXIgaHJzO1xyXG4gICAgdmFyIG1pbjtcclxuICAgIHZhciBzZWM7XHJcblxyXG4gICAgLyogLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cclxuICAgICogT04gRE9DVU1FTlQgTE9BRFxyXG4gICAgKiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSAqL1xyXG4gICAgJChmdW5jdGlvbigpIHtcclxuICAgICAgICAvLyBDYWxjdWxhdGUgdGltZSB1bnRpbCBsYXVuY2ggZGF0ZVxyXG4gICAgICAgIHRpbWVUb0xhdW5jaCgpO1xyXG4gICAgICAgIC8vIFRyYW5zaXRpb24gdGhlIGN1cnJlbnQgY291bnRkb3duIGZyb20gMCBcclxuICAgICAgICBudW1iZXJUcmFuc2l0aW9uKCcjZGF5cyAubnVtYmVyJywgZGF5cywgMTAwMCwgJ2Vhc2VPdXRRdWFkJyk7XHJcbiAgICAgICAgbnVtYmVyVHJhbnNpdGlvbignI2hvdXJzIC5udW1iZXInLCBocnMsIDEwMDAsICdlYXNlT3V0UXVhZCcpO1xyXG4gICAgICAgIG51bWJlclRyYW5zaXRpb24oJyNtaW51dGVzIC5udW1iZXInLCBtaW4sIDEwMDAsICdlYXNlT3V0UXVhZCcpO1xyXG4gICAgICAgIC8vIEJlZ2luIENvdW50ZG93blxyXG4gICAgICAgIHNldFRpbWVvdXQoY291bnREb3duVGltZXIsMTAwMSk7XHJcbiAgICB9KTtcclxuXHJcbiAgICAvKiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxyXG4gICAgKiBGSUdVUkUgT1VUIFRIRSBBTU9VTlQgT0YgXHJcbiAgICBUSU1FIExFRlQgQkVGT1JFIExBVU5DSFxyXG4gICAgKiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSAqL1xyXG4gICAgZnVuY3Rpb24gdGltZVRvTGF1bmNoKCl7XHJcbiAgICAgICAgLy8gR2V0IHRoZSBjdXJyZW50IGRhdGVcclxuICAgICAgICB2YXIgY3VycmVudERhdGUgPSBuZXcgRGF0ZSgpO1xyXG5cclxuICAgICAgICAvLyBGaW5kIHRoZSBkaWZmZXJlbmNlIGJldHdlZW4gZGF0ZXNcclxuICAgICAgICB2YXIgZGlmZiA9IChjdXJyZW50RGF0ZSAtIHRhcmdldERhdGUpLzEwMDA7XHJcbiAgICAgICAgdmFyIGRpZmYgPSBNYXRoLmFicyhNYXRoLmZsb29yKGRpZmYpKTsgIFxyXG5cclxuICAgICAgICAvLyBDaGVjayBudW1iZXIgb2YgZGF5cyB1bnRpbCB0YXJnZXRcclxuICAgICAgICBkYXlzID0gTWF0aC5mbG9vcihkaWZmLygyNCo2MCo2MCkpO1xyXG4gICAgICAgIHNlYyA9IGRpZmYgLSBkYXlzICogMjQqNjAqNjA7XHJcblxyXG4gICAgICAgIC8vIENoZWNrIG51bWJlciBvZiBob3VycyB1bnRpbCB0YXJnZXRcclxuICAgICAgICBocnMgPSBNYXRoLmZsb29yKHNlYy8oNjAqNjApKTtcclxuICAgICAgICBzZWMgPSBzZWMgLSBocnMgKiA2MCo2MDtcclxuXHJcbiAgICAgICAgLy8gQ2hlY2sgbnVtYmVyIG9mIG1pbnV0ZXMgdW50aWwgdGFyZ2V0XHJcbiAgICAgICAgbWluID0gTWF0aC5mbG9vcihzZWMvKDYwKSk7XHJcbiAgICAgICAgc2VjID0gc2VjIC0gbWluICogNjA7XHJcbiAgICB9XHJcblxyXG4gICAgLyogLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cclxuICAgICogRElTUExBWSBUSEUgQ1VSUkVOVCBcclxuICAgIENPVU5UIFRPIExBVU5DSFxyXG4gICAgKiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSAqL1xyXG4gICAgZnVuY3Rpb24gY291bnREb3duVGltZXIoKXsgXHJcbiAgICAgICAgXHJcbiAgICAgICAgLy8gRmlndXJlIG91dCB0aGUgdGltZSB0byBsYXVuY2hcclxuICAgICAgICB0aW1lVG9MYXVuY2goKTtcclxuICAgICAgICBcclxuICAgICAgICAvLyBXcml0ZSB0byBjb3VudGRvd24gY29tcG9uZW50XHJcbiAgICAgICAgJCggXCIjZGF5cyAubnVtYmVyXCIgKS50ZXh0KGRheXMpO1xyXG4gICAgICAgICQoIFwiI2hvdXJzIC5udW1iZXJcIiApLnRleHQoaHJzKTtcclxuICAgICAgICAkKCBcIiNtaW51dGVzIC5udW1iZXJcIiApLnRleHQobWluKTtcclxuICAgICAgICBcclxuICAgICAgICAvLyBSZXBlYXQgdGhlIGNoZWNrIGV2ZXJ5IHNlY29uZFxyXG4gICAgICAgIHNldFRpbWVvdXQoY291bnREb3duVGltZXIsMTAwMCk7XHJcbiAgICB9XHJcblxyXG4gICAgLyogLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cclxuICAgICogVFJBTlNJVElPTiBOVU1CRVJTIEZST00gMFxyXG4gICAgVE8gQ1VSUkVOVCBUSU1FIFVOVElMIExBVU5DSFxyXG4gICAgKiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSAqL1xyXG4gICAgZnVuY3Rpb24gbnVtYmVyVHJhbnNpdGlvbihpZCwgZW5kUG9pbnQsIHRyYW5zaXRpb25EdXJhdGlvbiwgdHJhbnNpdGlvbkVhc2Upe1xyXG4gICAgICAgIC8vIFRyYW5zaXRpb24gbnVtYmVycyBmcm9tIDAgdG8gdGhlIGZpbmFsIG51bWJlclxyXG4gICAgICAgICQoe251bWJlckNvdW50OiAkKGlkKS50ZXh0KCl9KS5hbmltYXRlKHtudW1iZXJDb3VudDogZW5kUG9pbnR9LCB7XHJcbiAgICAgICAgICAgIGR1cmF0aW9uOiB0cmFuc2l0aW9uRHVyYXRpb24sXHJcbiAgICAgICAgICAgIGVhc2luZzp0cmFuc2l0aW9uRWFzZSxcclxuICAgICAgICAgICAgc3RlcDogZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgICAgICAgICAkKGlkKS50ZXh0KE1hdGguZmxvb3IodGhpcy5udW1iZXJDb3VudCkpO1xyXG4gICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICBjb21wbGV0ZTogZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgICAgICAgICAkKGlkKS50ZXh0KHRoaXMubnVtYmVyQ291bnQpO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfSk7IFxyXG4gICAgfTtcclxuLyogLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0qL1xyXG4vLyBHb29nbGUgbWFwIGluZGl2aWR1YWxcclxuLyogLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0qL1xyXG4gICAgdmFyIG15Q2VudGVyID0gbmV3IGdvb2dsZS5tYXBzLkxhdExuZygxMi4yNjY3LCAtMi4wNjY2Nyk7XHJcbiAgICBmdW5jdGlvbiBpbml0aWFsaXplKCkge1xyXG4gICAgICAgIHZhciBtYXBQcm9wID0ge1xyXG4gICAgICAgICAgICBjZW50ZXI6IG15Q2VudGVyLFxyXG4gICAgICAgICAgICB6b29tOiA3LFxyXG4gICAgICAgICAgICBtYXBUeXBlSWQ6IGdvb2dsZS5tYXBzLk1hcFR5cGVJZC5ST0FETUFQXHJcbiAgICAgICAgfTtcclxuICAgICAgICB2YXIgbWFwID0gbmV3IGdvb2dsZS5tYXBzLk1hcChkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcIm1hcFwiKSwgbWFwUHJvcCk7XHJcbiAgICAgICAgdmFyIG1hcmtlciA9IG5ldyBnb29nbGUubWFwcy5NYXJrZXIoe1xyXG4gICAgICAgICAgICBwb3NpdGlvbjogbXlDZW50ZXIsXHJcbiAgICAgICAgfSk7XHJcbiAgICAgICAgbWFya2VyLnNldE1hcChtYXApO1xyXG4gICAgfVxyXG4gICAgZ29vZ2xlLm1hcHMuZXZlbnQuYWRkRG9tTGlzdGVuZXIod2luZG93LCAnbG9hZCcsIGluaXRpYWxpemUpO1xyXG4vKiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSovXHJcbi8vIEhhbWJ1cmdlciBtZW51IGFuZCBzaWRlYmFyXHJcbi8qIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tKi9cclxuICAgIGNvbnN0IGhhbWJ1cmdlciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5oYW1idXJnZXInKTtcclxuICAgIGNvbnN0IHNlYXJjaCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5zZWFyY2gtaWNvbicpXHJcblxyXG4gICAgaGFtYnVyZ2VyLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24oZSkge1xyXG4gICAgICAgIGUuc3RvcFByb3BhZ2F0aW9uKClcclxuICAgICAgICBlLnByZXZlbnREZWZhdWx0KClcclxuICAgICAgICBoYW1idXJnZXIuY2xhc3NMaXN0LnRvZ2dsZSgnaXMtYWN0aXZlJylcclxuICAgICAgICBkb2N1bWVudC5ib2R5LmNsYXNzTGlzdC50b2dnbGUoJ2hhcy1zaWRlYmFyJylcclxuICAgIH0pO1xyXG5cclxuICAgIHNlYXJjaC5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uKGUpIHtcclxuICAgICAgICBlLnN0b3BQcm9wYWdhdGlvbigpXHJcbiAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpXHJcbiAgICAgICAgc2VhcmNoLmNsYXNzTGlzdC50b2dnbGUoJ29wZW4nKVxyXG4gICAgICAgIHNlYXJjaC5wYXJlbnROb2RlLmNsYXNzTGlzdC50b2dnbGUoJ29wZW4nKTtcclxuICAgIH0pO1xyXG4vKiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSovXHJcbi8vIEV2ZW50IG1lbnVcclxuLyogLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0qL1xyXG4gICAgY29uc3QgYnV0dG9ucyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5wcm9ncmFtX19uYXZpZ2F0aW9uIGEnKTtcclxuXHJcbiAgICBBcnJheS5mcm9tKGJ1dHRvbnMpLmZvckVhY2goZnVuY3Rpb24oJGJ0bikge1xyXG4gICAgICAgICRidG4uYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIGZBY3RpdmUpO1xyXG4gICAgfSk7XHJcblxyXG4gICAgZnVuY3Rpb24gZkFjdGl2ZShlKSB7XHJcbiAgICAgICAgZS5zdG9wUHJvcGFnYXRpb24oKTtcclxuICAgICAgICAvL2UucHJldmVudERlZmF1bHQoKTtcclxuICAgICAgICBpZiggIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5hY3RpdmUnKSApe1xyXG4gICAgICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuYWN0aXZlJykuY2xhc3NMaXN0LnJlbW92ZSgnYWN0aXZlJyk7XHJcbiAgICAgICAgfVxyXG4gICAgICAgIGUuY3VycmVudFRhcmdldC5jbGFzc0xpc3QuYWRkKCdhY3RpdmUnKTtcclxuICAgIH07XHJcbi8qIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tKi9cclxuLy8gRm9ybSBjb250YWN0IGZlZWRiYWNrIGFuZCBmb2N1c1xyXG4vKiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSovXHJcbiAgICB2YXIgZkNoZWNrRm9ybSA9IGZ1bmN0aW9uIGZDaGVja0Zvcm0oKSB7XHJcbiAgICAgICAgdmFyICRGb3JtID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignZm9ybS5jb250YWN0Jyk7XHJcbiAgICAgICAgdmFyICRGaXJzdE5hbWVGaWVsZCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdmaXJzdF9uYW1lJyk7XHJcbiAgICAgICAgdmFyICRMYXN0TmFtZUZpZWxkID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2xhc3RfbmFtZScpO1xyXG4gICAgICAgIHZhciAkRW1haWxGaWVsZCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdlbWFpbCcpO1xyXG4gICAgICAgIHZhciAkTXNnRmllbGQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbWVzc2FnZScpO1xyXG4gICAgICAgIHZhciAkU3VibWl0QnRuID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3N1Ym1pdCcpO1xyXG4gICAgICAgIHZhciByZWdleHBOYW1lID0gL15bYS16QS1aXFx1MDBDMC1cXHUwMEZGXStbJy1dP1thLXpBLVpcXHUwMEMwLVxcdTAwRkZdKyQvO1xyXG4gICAgICAgIHZhciByZWdleHBFbWFpbCA9IC9eKFthLXowLTlfXFwuLV0rKUAoW1xcZGEtelxcLi1dKylcXC4oW2EtelxcLl17Miw2fSkkLztcclxuICAgICAgICB2YXIgcmVnZXhwTXNnID0gL14oW2EtekEtWl17Miw0MH0gKyBbYS16QS1aXXsyLDQwfSkkLztcclxuICAgICAgICB2YXIgZkNoZWNrQUZpZWxkID0gZnVuY3Rpb24gZkNoZWNrQUZpZWxkKGZpZWxkLCByZWdleHApIHtcclxuICAgICAgICAgICAgaWYgKGZpZWxkLnZhbHVlID09ICcnKSB7XHJcbiAgICAgICAgICAgICAgICBmaWVsZC5wYXJlbnROb2RlLnF1ZXJ5U2VsZWN0b3IoJ3NwYW4nKS5pbm5lckhUTUwgPSBcIlZvdHJlIGNoYW1wcyBkZSBmb3JtdWxhaXJlIGVzdCB2aWRlLlwiO1xyXG4gICAgICAgICAgICAgICAgZmllbGQucGFyZW50Tm9kZS5xdWVyeVNlbGVjdG9yKCdzcGFuJykuY2xhc3NMaXN0LmFkZCgnb24nKTtcclxuICAgICAgICAgICAgICAgIHJldHVybiBmYWxzZTtcclxuICAgICAgICAgICAgfSBlbHNlIGlmIChyZWdleHAgJiYgIXJlZ2V4cC50ZXN0KGZpZWxkLnZhbHVlKSkge1xyXG4gICAgICAgICAgICAgICAgZmllbGQucGFyZW50Tm9kZS5xdWVyeVNlbGVjdG9yKCdzcGFuJykuaW5uZXJIVE1MID0gXCJJbCBzZW1ibGUgcXVlIGxhIHZhbGV1ciByZW50csOpIGFpdCB1biBwcm9ibMOobWUuXCI7XHJcbiAgICAgICAgICAgICAgICBmaWVsZC5wYXJlbnROb2RlLnF1ZXJ5U2VsZWN0b3IoJ3NwYW4nKS5jbGFzc0xpc3QuYWRkKCdvbicpO1xyXG4gICAgICAgICAgICAgICAgcmV0dXJuIGZhbHNlO1xyXG4gICAgICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICAgICAgJFN1Ym1pdEJ0bi5yZW1vdmVBdHRyaWJ1dGUoJ2Rpc2FibGVkJyk7XHJcbiAgICAgICAgICAgICAgICBmaWVsZC5wYXJlbnROb2RlLnF1ZXJ5U2VsZWN0b3IoJ3NwYW4nKS5jbGFzc0xpc3QucmVtb3ZlKCdvbicpO1xyXG4gICAgICAgICAgICAgICAgZmllbGQucGFyZW50Tm9kZS5xdWVyeVNlbGVjdG9yKCcuaW5wdXQnKS5jbGFzc0xpc3QuYWRkKCdvaycpO1xyXG4gICAgICAgICAgICAgICAgcmV0dXJuIHRydWU7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9O1xyXG4gICAgICAgIHZhciBmQ2hlY2tGaXJzdE5hbWUgPSBmdW5jdGlvbiBmQ2hlY2tGaXJzdE5hbWUoKSB7XHJcbiAgICAgICAgICAgIHJldHVybiBmQ2hlY2tBRmllbGQoJEZpcnN0TmFtZUZpZWxkLCByZWdleHBOYW1lKTtcclxuICAgICAgICB9O1xyXG4gICAgICAgIHZhciBmQ2hlY2tMYXN0TmFtZSA9IGZ1bmN0aW9uIGZDaGVja0xhc3ROYW1lKCkge1xyXG4gICAgICAgICAgICByZXR1cm4gZkNoZWNrQUZpZWxkKCRMYXN0TmFtZUZpZWxkLCByZWdleHBOYW1lKTtcclxuICAgICAgICB9O1xyXG4gICAgICAgIHZhciBmQ2hlY2tFbWFpbCA9IGZ1bmN0aW9uIGZDaGVja0VtYWlsKCkge1xyXG4gICAgICAgICAgICByZXR1cm4gZkNoZWNrQUZpZWxkKCRFbWFpbEZpZWxkLCByZWdleHBFbWFpbCk7XHJcbiAgICAgICAgfTtcclxuICAgICAgICB2YXIgZkNoZWNrTWVzc2FnZSA9IGZ1bmN0aW9uIGZDaGVja01lc3NhZ2UoKSB7XHJcbiAgICAgICAgICAgIGlmICgkTXNnRmllbGQudmFsdWUuc3BsaXQoL1xccysvKS5sZW5ndGggPj0gMykge1xyXG4gICAgICAgICAgICAgICAgJE1zZ0ZpZWxkLnBhcmVudE5vZGUucXVlcnlTZWxlY3Rvcignc3BhbicpLmNsYXNzTGlzdC5yZW1vdmUoJ29uJyk7XHJcbiAgICAgICAgICAgICAgICAkTXNnRmllbGQucGFyZW50Tm9kZS5xdWVyeVNlbGVjdG9yKCcuaW5wdXQnKS5jbGFzc0xpc3QuYWRkKCdvaycpO1xyXG4gICAgICAgICAgICAgICAgcmV0dXJuIHRydWU7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgaWYgKCRNc2dGaWVsZC52YWx1ZS5zcGxpdCgvXFxzKy8pLmxlbmd0aCA9PT0gMSkge1xyXG4gICAgICAgICAgICAgICAgJE1zZ0ZpZWxkLnBhcmVudE5vZGUucXVlcnlTZWxlY3Rvcignc3BhbicpLmlubmVySFRNTCA9IFwiVm91cyBuJ2F2ZXogcGFzIMOpY3JpdCBkZSBtZXNzYWdlLlwiO1xyXG4gICAgICAgICAgICAgICAgJE1zZ0ZpZWxkLnBhcmVudE5vZGUucXVlcnlTZWxlY3Rvcignc3BhbicpLmNsYXNzTGlzdC5hZGQoJ29uJyk7XHJcbiAgICAgICAgICAgICAgICByZXR1cm4gZmFsc2U7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgaWYgKCRNc2dGaWVsZC52YWx1ZS5zcGxpdCgvXFxzKy8pLmxlbmd0aCA8IDUpIHtcclxuICAgICAgICAgICAgICAgICRNc2dGaWVsZC5wYXJlbnROb2RlLnF1ZXJ5U2VsZWN0b3IoJ3NwYW4nKS5pbm5lckhUTUwgPSBcIlZvdXMgYXZleiBwYXMgw6ljcmlzIHVuIGFzc2V6IGdyYW5kIG1lc3NhZ2UuXCI7XHJcbiAgICAgICAgICAgICAgICAkTXNnRmllbGQucGFyZW50Tm9kZS5xdWVyeVNlbGVjdG9yKCdzcGFuJykuY2xhc3NMaXN0LmFkZCgnb24nKTtcclxuICAgICAgICAgICAgICAgIHJldHVybiBmYWxzZTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH07XHJcbiAgICAgICAgdmFyIGZDaGVja0FsbCA9IGZ1bmN0aW9uIGZDaGVja0FsbCgpIHtcclxuICAgICAgICAgICAgaWYgKGZDaGVja0ZpcnN0TmFtZSgpICogZkNoZWNrTGFzdE5hbWUoKSAqIGZDaGVja0VtYWlsKCkgKiBmQ2hlY2tNZXNzYWdlKCkgKSB7XHJcbiAgICAgICAgICAgICAgICAkRm9ybS5jbGFzc0xpc3QuYWRkKCd2YWxpZCcpO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfTtcclxuXHJcbiAgICAgICAgJEZpcnN0TmFtZUZpZWxkLmFkZEV2ZW50TGlzdGVuZXIoJ2JsdXInLCBmQ2hlY2tGaXJzdE5hbWUsIGZhbHNlKTtcclxuICAgICAgICAkTGFzdE5hbWVGaWVsZC5hZGRFdmVudExpc3RlbmVyKCdibHVyJywgZkNoZWNrTGFzdE5hbWUsIGZhbHNlKTtcclxuICAgICAgICAkRW1haWxGaWVsZC5hZGRFdmVudExpc3RlbmVyKCdibHVyJywgZkNoZWNrRW1haWwsIGZhbHNlKTtcclxuICAgICAgICAkTXNnRmllbGQuYWRkRXZlbnRMaXN0ZW5lcignYmx1cicsIGZDaGVja01lc3NhZ2UsIGZhbHNlKTtcclxuICAgICAgICAkU3VibWl0QnRuLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZkNoZWNrQWxsLCBmYWxzZSk7XHJcblxyXG4gICAgICAgIHZhciBpbnB1dCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJ2ZpZWxkc2V0IC5pbnB1dCcpO1xyXG4gICAgICAgIHZhciBnZXRGb2N1cyA9IGZ1bmN0aW9uIGdldEZvY3VzKG9FdmVudCkge1xyXG4gICAgICAgICAgICBvRXZlbnQuY3VycmVudFRhcmdldC5wYXJlbnROb2RlLnF1ZXJ5U2VsZWN0b3IoJ2xhYmVsJykuY2xhc3NMaXN0LmFkZChcImZvY3VzXCIpO1xyXG4gICAgICAgIH07XHJcbiAgICAgICAgdmFyIG91dEZvY3VzID0gZnVuY3Rpb24gb3V0Rm9jdXMoZSkge1xyXG4gICAgICAgICAgICBpZiAoZS5jdXJyZW50VGFyZ2V0LnBhcmVudE5vZGUucXVlcnlTZWxlY3RvcignLmlucHV0JykudmFsdWUubGVuZ3RoID09PSAwIHx8IGUuY3VycmVudFRhcmdldC5wYXJlbnROb2RlLnF1ZXJ5U2VsZWN0b3IoJy5pbnB1dCBvcHRpb24nKS52YWx1ZS5sZW5ndGggPT09IDAgKSB7XHJcbiAgICAgICAgICAgICAgICBlLmN1cnJlbnRUYXJnZXQucGFyZW50Tm9kZS5xdWVyeVNlbGVjdG9yKCdsYWJlbCcpLmNsYXNzTGlzdC5yZW1vdmUoXCJmb2N1c1wiKTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH07XHJcbiAgICAgICAgQXJyYXkuZnJvbShpbnB1dCkuZm9yRWFjaChmdW5jdGlvbigkbGFiZWwpIHtcclxuICAgICAgICAgICAgJGxhYmVsLmFkZEV2ZW50TGlzdGVuZXIoXCJmb2N1c1wiLCBnZXRGb2N1cyk7XHJcbiAgICAgICAgICAgICRsYWJlbC5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgZ2V0Rm9jdXMpO1xyXG4gICAgICAgICAgICAkbGFiZWwuYWRkRXZlbnRMaXN0ZW5lcihcImJsdXJcIiwgb3V0Rm9jdXMpO1xyXG4gICAgICAgIH0pO1xyXG4gICAgfTtcclxuICAgIC8vZkNoZWNrRm9ybSgpO1xyXG4vKiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSovXHJcbi8vIEpTIFNsaWRlclxyXG4vKiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSovXHJcblxyXG4gICAgY29uc3QgZkNhbmNlbEFuY2hvciA9IGZ1bmN0aW9uKGUpe1xyXG4gICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcclxuICAgIH1cclxuXHJcbiAgICBjb25zdCBidWxsZXRzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLmJ1bGxldHNfbmF2Jyk7XHJcblxyXG4gICAgQXJyYXkuZnJvbShidWxsZXRzKS5mb3JFYWNoKGZ1bmN0aW9uKCRidG4pIHtcclxuICAgICAgICAkYnRuLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCBmQ2FuY2VsQW5jaG9yKTtcclxuICAgICAgICBjb25zdCB0cmFuc2xhdGVWYWx1ZSA9ICRidG4uZ2V0QXR0cmlidXRlKCdkYXRhLXRyYW5zbGF0ZVZhbHVlJyk7XHJcbiAgICAgICAgJGJ0bi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsICgpID0+e1xyXG4gICAgICAgICAgICAvLyBSZW1vdmUgY2xhc3MgYWN0aXZlIGZyb20gcHJlYyBmb2N1c1xyXG4gICAgICAgICAgICBpZiggJGJ0bi5wYXJlbnROb2RlLnF1ZXJ5U2VsZWN0b3IoJy5hY3RpdmUnKSApe1xyXG4gICAgICAgICAgICAgICAgJGJ0bi5wYXJlbnROb2RlLnF1ZXJ5U2VsZWN0b3IoJy5hY3RpdmUnKS5jbGFzc0xpc3QucmVtb3ZlKCdhY3RpdmUnKTtcclxuICAgICAgICAgICAgfVxyXG5cclxuICAgICAgICAgICAgLy8gTWFrZSB0cmFuc2xhdGVYIGFuaW1hdGlvbiBvZiBzbGlkZXJcclxuICAgICAgICAgICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLnNsaWRlcicpLnN0eWxlLnRyYW5zZm9ybSA9IGB0cmFuc2xhdGVYKCR7dHJhbnNsYXRlVmFsdWV9KWA7XHJcblxyXG4gICAgICAgICAgICAvLyBBZGQgY2xhc3MgYWN0aXZlIGZyb20gYWN0dWFsIGZvY3VzXHJcbiAgICAgICAgICAgICRidG4uY2xhc3NMaXN0LmFkZCgnYWN0aXZlJyk7XHJcblxyXG4gICAgICAgICAgICAvLyBDaGFuZ2Ugb3BhY2l0eSBvZiBwcmVjL25leHQgaW1hZ2VcclxuICAgICAgICAgICAgaWYoIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5zbGlkZXIgLnByZWNOZXh0JykgKXtcclxuICAgICAgICAgICAgICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5zbGlkZXIgLnByZWNOZXh0JylbMF0uY2xhc3NMaXN0LnJlbW92ZSgncHJlY05leHQnKTtcclxuICAgICAgICAgICAgICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5zbGlkZXIgLnByZWNOZXh0JylbMF0uY2xhc3NMaXN0LnJlbW92ZSgncHJlY05leHQnKTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBpbWdbJGJ0bi5nZXRBdHRyaWJ1dGUoJ2RhdGEtcHJlYy1pbWcnKV0uY2xhc3NMaXN0LnRvZ2dsZSgncHJlY05leHQnKTtcclxuICAgICAgICAgICAgaW1nWyRidG4uZ2V0QXR0cmlidXRlKCdkYXRhLW5leHQtaW1nJyldLmNsYXNzTGlzdC50b2dnbGUoJ3ByZWNOZXh0Jyk7XHJcbiAgICAgICAgfSk7XHJcbiAgICB9KTtcclxuICAgIFxyXG4gICAgY29uc3QgcHJldk5leHQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcucHJldk5leHQgZGl2IGEnKTtcclxuXHJcbiAgICBBcnJheS5mcm9tKHByZXZOZXh0KS5mb3JFYWNoKGZ1bmN0aW9uKCRwcmV2TmV4dCkge1xyXG4gICAgICAgICRwcmV2TmV4dC5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgZkNhbmNlbEFuY2hvcik7XHJcblxyXG4gICAgICAgIGNvbnN0IHRyYW5zbGF0ZVZhbHVlID0gJHByZXZOZXh0LmdldEF0dHJpYnV0ZSgnZGF0YS10cmFuc2xhdGVWYWx1ZScpO1xyXG4gICAgICAgIFxyXG4gICAgICAgICRwcmV2TmV4dC5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgKCkgPT57XHJcblxyXG4gICAgICAgICAgICAvLyBNYWtlIHRyYW5zbGF0ZVggYW5pbWF0aW9uIG9mIHNsaWRlclxyXG4gICAgICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuc2xpZGVyJykuc3R5bGUudHJhbnNmb3JtID0gYHRyYW5zbGF0ZVgoJHt0cmFuc2xhdGVWYWx1ZX0pYDtcclxuXHJcbiAgICAgICAgICAgIC8vIENyZWF0ZSB2YXJpYWJsZSBmb3IgdGhlIHBhcmVudFxyXG4gICAgICAgICAgICBjb25zdCBwcmV2TmV4dFBhcmVudCA9ICRwcmV2TmV4dC5wYXJlbnROb2RlLnBhcmVudE5vZGU7XHJcblxyXG4gICAgICAgICAgICAvLyBBZGQgdmlzaWJsZS9oaWRkZW4gc3R5bGUgZm9yIHRoZSBuZXh0UHJlYyBidXR0b25cclxuICAgICAgICAgICAgcHJldk5leHRQYXJlbnQuY2hpbGROb2Rlc1skcHJldk5leHQuZ2V0QXR0cmlidXRlKCdkYXRhLW5leHQnKV0uc3R5bGUudmlzaWJpbGl0eSA9ICd2aXNpYmxlJztcclxuICAgICAgICAgICAgcHJldk5leHRQYXJlbnQuY2hpbGROb2Rlc1skcHJldk5leHQuZ2V0QXR0cmlidXRlKCdkYXRhLXByZWMnKV0uc3R5bGUudmlzaWJpbGl0eSA9ICdoaWRkZW4nO1xyXG4gICAgICAgICAgICBcclxuICAgICAgICAgICAgLy8gQ2hhbmdlIG9wYWNpdHkgb2YgcHJlYy9uZXh0IGltYWdlXHJcbiAgICAgICAgICAgIGlmKCBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcuc2xpZGVyIC5wcmVjTmV4dCcpICl7XHJcbiAgICAgICAgICAgICAgICBjb25zb2xlLmxvZyhkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcuc2xpZGVyIC5wcmVjTmV4dCcpKTtcclxuICAgICAgICAgICAgICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5zbGlkZXIgLnByZWNOZXh0JylbMF0uY2xhc3NMaXN0LnJlbW92ZSgncHJlY05leHQnKTtcclxuICAgICAgICAgICAgICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5zbGlkZXIgLnByZWNOZXh0JylbMF0uY2xhc3NMaXN0LnJlbW92ZSgncHJlY05leHQnKTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBpbWdbJHByZXZOZXh0LmdldEF0dHJpYnV0ZSgnZGF0YS1wcmVjLWltZycpXS5jbGFzc0xpc3QudG9nZ2xlKCdwcmVjTmV4dCcpO1xyXG4gICAgICAgICAgICBpbWdbJHByZXZOZXh0LmdldEF0dHJpYnV0ZSgnZGF0YS1uZXh0LWltZycpXS5jbGFzc0xpc3QudG9nZ2xlKCdwcmVjTmV4dCcpO1xyXG5cclxuICAgICAgICAgICAgLy8gUmVtb3ZlIGNsYXNzIGFjdGl2ZSBmcm9tIGJ1bGxldHMgcHJlYyBmb2N1c1xyXG4gICAgICAgICAgICBjb25zdCBidG5BID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLmJ1bGxldHNfbmF2Jyk7XHJcbiAgICAgICAgICAgIGNvbnN0IGJ0biA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5idWxsZXRzX25hdicpO1xyXG4gICAgICAgICAgICBpZiggZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLmJ1bGxldHMgLmFjdGl2ZScpICl7XHJcbiAgICAgICAgICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuYnVsbGV0cyAuYWN0aXZlJykuY2xhc3NMaXN0LnJlbW92ZSgnYWN0aXZlJyk7XHJcbiAgICAgICAgICAgIH1cclxuXHJcbiAgICAgICAgICAgIC8vIEFkZCBjbGFzcyBhY3RpdmUgZnJvbSBhY3R1YWwgZm9jdXNcclxuICAgICAgICAgICAgYnRuQVsgJHByZXZOZXh0LmdldEF0dHJpYnV0ZSgnZGF0YS1mb2N1cycpIF0uY2xhc3NMaXN0LmFkZCgnYWN0aXZlJyk7XHJcbiAgICAgICAgfSk7XHJcbiAgICB9KTtcclxuXHJcbiAgICBjb25zdCBpbWcgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcuc2xpZGVyIGRpdicpOyJdfQ==
