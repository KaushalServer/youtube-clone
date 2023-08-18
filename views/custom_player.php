<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Custom Video Player</title>
  <style>
    .video-player {
      position: relative;
      width: 100%;
      max-width: 800px;
      margin: 0 auto;
      background-color: #000;
    }

    .video {
      width: 100%;
    }

    .controls {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px;
      background-color: rgba(0, 0, 0, 0.7);
      color: white;
    }

    .control-button {
      background-color: transparent;
      border: none;
      color: white;
      cursor: pointer;
      font-size: 16px;
      outline: none;
    }

    .control-slider {
      width: 80px;
      -webkit-appearance: none;
      background-color: #555;
    }

    .progress {
      flex-grow: 1;
      margin: 0 10px;
    }

    .progress-bar {
      width: 100%;
      -webkit-appearance: none;
      background-color: #777;
    }

    .progress-bar::-webkit-slider-thumb {
      -webkit-appearance: none;
      appearance: none;
      width: 10px;
      height: 10px;
      background-color: white;
      border-radius: 50%;
      cursor: pointer;
    }

    .fullscreen-button {
      background-color: transparent;
      border: none;
      color: white;
      cursor: pointer;
      font-size: 16px;
      outline: none;
    }

    /* Additional styling and responsive adjustments */
  </style>
</head>

<body>
  <div class="video-player">
    <video id="my-video" class="video" controls>
      <source src="../uploads/kaushal/video=e89eb76c6c.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="controls">
      <button id="play-pause-button" class="control-button">Play</button>
      <input type="range" id="volume-slider" class="control-slider" min="0" max="1" step="0.1" value="1">
      <div class="progress">
        <input type="range" id="progress-bar" class="progress-bar" min="0" max="100" value="0">
      </div>
      <button id="fullscreen-button" class="control-button">Fullscreen</button>
    </div>
  </div>


</body>

</html>

<script>
  const video = document.getElementById('my-video');
  const playPauseButton = document.getElementById('play-pause-button');
  const volumeSlider = document.getElementById('volume-slider');
  const progressBar = document.getElementById('progress-bar');
  const fullscreenButton = document.getElementById('fullscreen-button');

  playPauseButton.addEventListener('click', () => {
    if (video.paused) {
      video.play();
      playPauseButton.textContent = 'Pause';
    } else {
      video.pause();
      playPauseButton.textContent = 'Play';
    }
  });

  volumeSlider.addEventListener('input', () => {
    video.volume = volumeSlider.value;
  });

  progressBar.addEventListener('input', () => {
    const seekTime = video.duration * (progressBar.value / 100);
    video.currentTime = seekTime;
  });

  fullscreenButton.addEventListener('click', () => {
    if (video.requestFullscreen) {
      video.requestFullscreen();
    } else if (video.mozRequestFullScreen) {
      video.mozRequestFullScreen();
    } else if (video.webkitRequestFullscreen) {
      video.webkitRequestFullscreen();
    }
  });

  video.addEventListener('timeupdate', () => {
    const progress = (video.currentTime / video.duration) * 100;
    progressBar.value = progress;
  });

  /* Additional event listeners and functionalities */

</script>