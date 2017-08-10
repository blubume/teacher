"use strict";

var video = document.querySelector("#videoElement");
navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;
if (!navigator.getUserMedia) {
	alert("browser error");
}

var videoStream;
var audioStream;
var video_status = false;
var audio_status = false;

function handleVideo(stream) {
	video.src = window.URL.createObjectURL(stream);
	videoStream = stream;
	video_status = true;
	var win = $(window).innerHeight();
	var cam = $("video").innerHeight();
	var res = cam - win;
	if (res > 0) {
		$("video").css("top", "-" + res / 2 + "px");
	}
}

function handleAudio(stream) {
	audioStream = stream;
	audio_status = true;
}
function videoError(e) {
	document.write("can't use the webcam");
}
function audioError(e) {
	document.write("can't use the microphone.");
}

function audioInit() {
	navigator.getUserMedia({ audio: true }, handleAudio, videoError);
}

function videoInit() {
	navigator.getUserMedia({ video: true }, handleVideo, audioError);
}

function toogleAudio() {
	if (audio_status == false) {
		audioInit();
		$(".micro").removeClass("not_micro");
	} else if (audio_status == true) {
		audioStream.getAudioTracks()[0].stop();
		audio_status = false;
		$(".micro").addClass("not_micro");
	}
}

function toogleVideo() {
	if (video_status == false) {
		videoInit();
		$(".video").removeClass("not_video");
	} else if (video_status == true) {
		videoStream.getVideoTracks()[0].stop();
		video_status = false;
		$(".video").addClass("not_video");
	}
}