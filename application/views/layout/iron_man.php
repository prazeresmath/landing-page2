<style type="text/css">
body,
html {
  background: #dcefff;
  height: 100%;
  margin: 0;
  overflow: hidden;
  position: relative;
}

.iron-man-wrapper {
  bottom: 0;
  left: 0;
  margin: auto;
  position: absolute;
  right: 0;
  top: 0;
  height: 198px;
  margin: auto;
  width: 161px;
  z-index: 2;
  animation-duration: 15s;
  -webkit-animation-duration: 15s;
  animation-timing-function: linear;
  -webkit-animation-timing-function: linear;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
  animation-name: flyAway;
  -webkit-animation-name: flyAway;
}

.wrapper {
  bottom: 0;
  left: 0;
  margin: auto;
  position: absolute;
  right: 0;
  top: 0;
  height: 205px;
  width: 161px;
}

.tony-stark {
  bottom: 0;
  left: 0;
  margin: auto;
  position: absolute;
  right: 0;
  top: 0;
  width: 150px;
  animation-duration: 15s;
  -webkit-animation-duration: 15s;
  animation-timing-function: linear;
  -webkit-animation-timing-function: linear;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
  animation-name: disappearWhenSuited;
  -webkit-animation-name: disappearWhenSuited;
}

.shadow {
  bottom: 0;
  left: 0;
  margin: auto;
  position: absolute;
  right: 0;
  top: 0;
  background-color: #444;
  border-radius: 50%;
  bottom: -17px;
  height: 30px;
  top: initial;
  width: 161px;
  z-index: 1;
  animation-duration: 15s;
  -webkit-animation-duration: 15s;
  animation-timing-function: linear;
  -webkit-animation-timing-function: linear;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
  animation-name: shadow;
  -webkit-animation-name: shadow;
}

.arc-reactor {
  bottom: 0;
  left: 0;
  margin: auto;
  position: absolute;
  right: 0;
  top: 0;
  height: 17px;
  top: 92px;
  width: 17px;
  animation-name: pulse;
  -webkit-animation-name: pulse;
  animation-duration: 2s;
  -webkit-animation-duration: 2s;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
}

.flame-left-hand {
  background-color: #1AA3FF;
  border-bottom-right-radius: 50% 75%;
  border-bottom-left-radius: 50% 75%;
  border-top-left-radius: 20% 20%;
  border-top-right-radius: 20% 20%;
  box-shadow: 0px 2px 2px 1px #1AA3FF;
  height: 12px;
  opacity: 0;
  position: absolute;
  width: 7px;
  z-index: 1;
  animation-duration: 15s;
  -webkit-animation-duration: 15s;
  animation-timing-function: linear;
  -webkit-animation-timing-function: linear;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
  left: 8px;
  top: 38px;
  animation-name: flicker-1;
  -webkit-animation-name: flicker-1;
}

.flame-right-hand {
  background-color: #1AA3FF;
  border-bottom-right-radius: 50% 75%;
  border-bottom-left-radius: 50% 75%;
  border-top-left-radius: 20% 20%;
  border-top-right-radius: 20% 20%;
  box-shadow: 0px 2px 2px 1px #1AA3FF;
  height: 12px;
  opacity: 0;
  position: absolute;
  width: 7px;
  z-index: 1;
  animation-duration: 15s;
  -webkit-animation-duration: 15s;
  animation-timing-function: linear;
  -webkit-animation-timing-function: linear;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
  right: 8px;
  top: 38px;
  animation-name: flicker-2;
  -webkit-animation-name: flicker-2;
}

.flame-left-leg {
  background-color: #1AA3FF;
  border-bottom-right-radius: 50% 75%;
  border-bottom-left-radius: 50% 75%;
  border-top-left-radius: 20% 20%;
  border-top-right-radius: 20% 20%;
  box-shadow: 0px 2px 2px 1px #1AA3FF;
  height: 12px;
  opacity: 0;
  position: absolute;
  width: 7px;
  z-index: 1;
  animation-duration: 15s;
  -webkit-animation-duration: 15s;
  animation-timing-function: linear;
  -webkit-animation-timing-function: linear;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
  left: 14px;
  bottom: -9px;
  animation-name: flicker-3;
  -webkit-animation-name: flicker-3;
}

.flame-right-leg {
  background-color: #1AA3FF;
  border-bottom-right-radius: 50% 75%;
  border-bottom-left-radius: 50% 75%;
  border-top-left-radius: 20% 20%;
  border-top-right-radius: 20% 20%;
  box-shadow: 0px 2px 2px 1px #1AA3FF;
  height: 12px;
  opacity: 0;
  position: absolute;
  width: 7px;
  z-index: 1;
  animation-duration: 15s;
  -webkit-animation-duration: 15s;
  animation-timing-function: linear;
  -webkit-animation-timing-function: linear;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
  right: 14px;
  bottom: -9px;
  animation-name: flicker-4;
  -webkit-animation-name: flicker-4;
}

.iron-man-helmet {
  height: 138px;
  position: absolute;
  top: -2px;
  z-index: 4;
  animation-duration: 15s;
  -webkit-animation-duration: 15s;
  animation-timing-function: linear;
  -webkit-animation-timing-function: linear;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
  animation-name: slideDown;
  -webkit-animation-name: slideDown;
}
.iron-man-helmet img {
  position: absolute;
  z-index: 4;
}

.iron-man-chest {
  bottom: 0;
  left: 0;
  margin: auto;
  position: absolute;
  right: 0;
  top: 0;
  height: 64px;
  left: 2px;
  top: 108px;
  width: 118px;
  z-index: 3;
  animation-duration: 15s;
  -webkit-animation-duration: 15s;
  animation-timing-function: linear;
  -webkit-animation-timing-function: linear;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
  animation-name: slideUp;
  -webkit-animation-name: slideUp;
}
.iron-man-chest img {
  position: absolute;
  z-index: 3;
}

.iron-man-left-arm {
  height: 41px;
  left: 14px;
  position: absolute;
  top: 126px;
  width: 43px;
  z-index: 2;
  animation-duration: 15s;
  -webkit-animation-duration: 15s;
  animation-timing-function: linear;
  -webkit-animation-timing-function: linear;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
  animation-name: slideRight;
  -webkit-animation-name: slideRight;
}
.iron-man-left-arm img {
  position: absolute;
  z-index: 2;
}

.iron-man-right-arm {
  height: 41px;
  right: 11px;
  position: absolute;
  top: 126px;
  width: 43px;
  z-index: 2;
  animation-duration: 15s;
  -webkit-animation-duration: 15s;
  animation-timing-function: linear;
  -webkit-animation-timing-function: linear;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
  animation-name: slideLeft;
  -webkit-animation-name: slideLeft;
}
.iron-man-right-arm img {
  position: absolute;
  z-index: 2;
}

.iron-man-left-leg {
  bottom: -11px;
  height: 54px;
  position: absolute;
  width: 34px;
  left: 44px;
  transform: rotate(24deg);
  z-index: 2;
  animation-duration: 15s;
  -webkit-animation-duration: 15s;
  animation-timing-function: linear;
  -webkit-animation-timing-function: linear;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
  animation-name: slideUpRotateLeft;
  -webkit-animation-name: slideUpRotateLeft;
}
.iron-man-left-leg img {
  position: absolute;
  z-index: 2;
}

.iron-man-right-leg {
  bottom: -11px;
  height: 54px;
  position: absolute;
  width: 34px;
  right: 44px;
  transform: rotate(-24deg);
  z-index: 2;
  animation-duration: 15s;
  -webkit-animation-duration: 15s;
  animation-timing-function: linear;
  -webkit-animation-timing-function: linear;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
  animation-name: slideUpRotateRight;
  -webkit-animation-name: slideUpRotateRight;
}
.iron-man-right-leg img {
  position: absolute;
  z-index: 2;
}

@keyframes disappearWhenSuited {
  25% {
    visibility: hidden;
  }
  85% {
    visibility: hidden;
  }
  86% {
    visibility: visible;
  }
}
@-webkit-keyframes disappearWhenSuited {
  25% {
    visibility: hidden;
  }
  85% {
    visibility: hidden;
  }
  86% {
    visibility: visible;
  }
}
@keyframes flyAway {
  0% {
    transform: translateY(0%);
  }
  27% {
    transform: translateY(0%);
  }
  50% {
    transform: translateY(-300%);
  }
  80% {
    transform: translateY(0%);
  }
}
@-webkit-keyframes flyAway {
  0% {
    transform: translateY(0%);
  }
  27% {
    transform: translateY(0%);
  }
  50% {
    transform: translateY(-300%);
  }
  80% {
    transform: translateY(0%);
  }
}
@keyframes pulse {
  0% {
    transform: scale(0.9);
    opacity: 0.8;
  }
  50% {
    transform: scale(1);
    opacity: 1;
  }
  100% {
    transform: scale(0.9);
    opacity: 0.8;
  }
}
@-webkit-keyframes pulse {
  0% {
    -webkit-transform: scale(0.9);
    opacity: 0.8;
  }
  50% {
    -webkit-transform: scale(1);
    opacity: 1;
  }
  100% {
    -webkit-transform: scale(0.9);
    opacity: 0.8;
  }
}
@keyframes shadow {
  0% {
    background-color: #444;
    transform: scale(1);
  }
  27% {
    background-color: #444;
    transform: scale(1);
  }
  50% {
    background-color: #F2F2F2;
    transform: scale(0);
  }
  80% {
    background-color: #444;
    transform: scale(1);
  }
}
@-webkit-keyframes shadow {
  0% {
    background-color: #444;
    transform: scale(1);
  }
  27% {
    background-color: #444;
    transform: scale(1);
  }
  50% {
    background-color: #F2F2F2;
    transform: scale(0);
  }
  80% {
    background-color: #444;
    transform: scale(1);
  }
}
@keyframes slideDown {
  0% {
    opacity: 0;
    transform: translateY(-200%);
  }
  10% {
    opacity: 0;
    transform: translateY(-200%);
  }
  22% {
    opacity: 1;
    transform: translateY(2%);
  }
  24% {
    opacity: 1;
    transform: translateY(0%);
  }
  27% {
    transform: translateY(0%);
  }
  50% {
    transform: translateY(0%);
  }
  85% {
    transform: translateY(0%);
  }
  95% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    transform: translateY(-200%);
  }
}
@-webkit-keyframes slideDown {
  0% {
    opacity: 0;
    transform: translateY(-200%);
  }
  10% {
    opacity: 0;
    transform: translateY(-200%);
  }
  23% {
    opacity: 1;
    transform: translateY(2%);
  }
  25% {
    opacity: 1;
    transform: translateY(0%);
  }
  27% {
    transform: translateY(0%);
  }
  50% {
    transform: translateY(0%);
  }
  85% {
    transform: translateY(0%);
  }
  95% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    transform: translateY(-200%);
  }
}
@keyframes slideLeft {
  0% {
    opacity: 0;
    transform: translateX(200%);
  }
  10% {
    opacity: 0;
    transform: translateX(200%);
  }
  14% {
    opacity: 1;
    transform: translateX(-2%);
  }
  16% {
    opacity: 1;
    transform: transateX(0%);
  }
  27% {
    transform: translateX(0%);
  }
  50% {
    transform: translateY(0%);
  }
  85% {
    transform: translateY(0%);
  }
  95% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    transform: translateX(200%);
  }
}
@-webkit-keyframes slideLeft {
  0% {
    opacity: 0;
    transform: translateX(200%);
  }
  10% {
    opacity: 0;
    transform: translateX(200%);
  }
  16% {
    opacity: 1;
    transform: translateX(-2%);
  }
  18% {
    opacity: 1;
    transform: transateX(0%);
  }
  27% {
    transform: translateX(0%);
  }
  50% {
    transform: translateY(0%);
  }
  85% {
    transform: translateY(0%);
  }
  95% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    transform: translateX(200%);
  }
}
@keyframes slideRight {
  0% {
    opacity: 0;
    transform: translateX(-200%);
  }
  10% {
    opacity: 0;
    transform: translateX(-200%);
  }
  22% {
    opacity: 1;
    transform: translateX(2%);
  }
  24% {
    opacity: 1;
    transform: translateX(0%);
  }
  27% {
    transform: translateX(0%);
  }
  50% {
    transform: translateY(0%);
  }
  85% {
    transform: translateY(0%);
  }
  95% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    transform: translateX(-200%);
  }
}
@-webkit-keyframes slideRight {
  0% {
    opacity: 0;
    transform: translateX(-200%);
  }
  10% {
    opacity: 0;
    transform: translateX(-200%);
  }
  15% {
    opacity: 1;
    transform: translateX(2%);
  }
  17% {
    opacity: 1;
    transform: translateX(0%);
  }
  27% {
    transform: translateX(0%);
  }
  50% {
    transform: translateY(0%);
  }
  85% {
    transform: translateY(0%);
  }
  95% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    transform: translateX(-200%);
  }
}
@keyframes slideUp {
  0% {
    opacity: 0;
    transform: translateY(200%);
  }
  10% {
    opacity: 0;
    transform: translateY(200%);
  }
  25% {
    opacity: 1;
    transform: translateY(-2%);
  }
  27% {
    opacity: 1;
    transform: translateY(0%);
  }
  27% {
    transform: translateY(0%);
  }
  50% {
    transform: translateY(0%);
  }
  85% {
    transform: translateY(0%);
  }
  95% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    transform: translateY(200%);
  }
}
@-webkit-keyframes slideUp {
  0% {
    opacity: 0;
    transform: translateY(200%);
  }
  10% {
    opacity: 0;
    transform: translateY(200%);
  }
  12% {
    opacity: 1;
    transform: translateY(-2%);
  }
  14% {
    opacity: 1;
    transform: translateY(0%);
  }
  27% {
    transform: translateY(0%);
  }
  50% {
    transform: translateY(0%);
  }
  85% {
    transform: translateY(0%);
  }
  95% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    transform: translateY(200%);
  }
}
@keyframes slideUpRotateLeft {
  0% {
    opacity: 0;
    transform: translateY(200%) rotate(24deg);
  }
  10% {
    opacity: 0;
    transform: translateY(200%) rotate(24deg);
  }
  14% {
    opacity: 1;
    transform: translateY(-2%) rotate(24deg);
  }
  16% {
    opacity: 1;
    transform: translateY(0%) rotate(24deg);
  }
  25% {
    transform: translateY(0%) rotate(24deg);
  }
  27% {
    transform: translateY(0%) translateX(3px) rotate(0deg);
  }
  80% {
    transform: translateY(0%) translateX(3px) rotate(0deg);
  }
  85% {
    transform: translateY(0%) translateX(0) rotate(24deg);
  }
  95% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    transform: translateY(200%) rotate(24deg);
  }
}
@-webkit-keyframes slideUpRotateLeft {
  0% {
    opacity: 0;
    transform: translateY(200%) rotate(24deg);
  }
  10% {
    opacity: 0;
    transform: translateY(200%) rotate(24deg);
  }
  22% {
    opacity: 1;
    transform: translateY(-2%) rotate(24deg);
  }
  24% {
    opacity: 1;
    transform: translateY(0%) rotate(24deg);
  }
  25% {
    transform: translateY(0%) rotate(24deg);
  }
  27% {
    transform: translateY(0%) translateX(3px) rotate(0deg);
  }
  80% {
    transform: translateY(0%) translateX(3px) rotate(0deg);
  }
  85% {
    transform: translateY(0%) translateX(0) rotate(24deg);
  }
  95% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    transform: translateY(200%) rotate(24deg);
  }
}
@keyframes slideUpRotateRight {
  0% {
    opacity: 0;
    transform: translateY(200%) rotate(-24deg);
  }
  10% {
    opacity: 0;
    transform: translateY(200%) rotate(-24deg);
  }
  13% {
    opacity: 1;
    transform: translateY(-2%) rotate(-24deg);
  }
  15% {
    opacity: 1;
    transform: translateY(0%) rotate(-24deg);
  }
  25% {
    transform: translateY(0%) rotate(-24deg);
  }
  27% {
    transform: translateY(0%) translateX(-3px) rotate(0deg);
  }
  80% {
    transform: translateY(0%) translateX(-3px) rotate(0deg);
  }
  85% {
    transform: translateY(0%) translateX(0) rotate(-24deg);
  }
  95% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    transform: translateY(200%) rotate(-24deg);
  }
}
@-webkit-keyframes slideUpRotateRight {
  0% {
    opacity: 0;
    transform: translateY(200%) rotate(-24deg);
  }
  10% {
    opacity: 0;
    transform: translateY(200%) rotate(-24deg);
  }
  14% {
    opacity: 1;
    transform: translateY(-2%) rotate(-24deg);
  }
  16% {
    opacity: 1;
    transform: translateY(0%) rotate(-24deg);
  }
  25% {
    transform: translateY(0%) rotate(-24deg);
  }
  27% {
    transform: translateY(0%) translateX(-3px) rotate(0deg);
  }
  80% {
    transform: translateY(0%) translateX(-3px) rotate(0deg);
  }
  85% {
    transform: translateY(0%) translateX(0) rotate(-24deg);
  }
  95% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    transform: translateY(200%) rotate(-24deg);
  }
}
@keyframes flicker-1 {
  0% {
    opacicty: 0;
  }
  27% {
    opacity: 0;
  }
  28% {
    opacity: 1;
    transform: rotate(0deg);
  }
  29% {
    transform: rotate(5deg);
  }
  29.5% {
    transform: rotate(-5deg);
  }
  30% {
    transform: rotate(5deg);
  }
  30.5% {
    transform: rotate(-5deg);
  }
  31% {
    transform: rotate(5deg);
  }
  31.5% {
    transform: rotate(-5deg);
  }
  32% {
    transform: rotate(5deg);
  }
  32.5% {
    transform: rotate(-5deg);
  }
  33% {
    transform: rotate(5deg);
  }
  33.5% {
    transform: rotate(-5deg);
  }
  34% {
    transform: rotate(5deg);
  }
  34.5% {
    transform: rotate(-5deg);
  }
  35% {
    transform: rotate(5deg);
  }
  35.5% {
    transform: rotate(-5deg);
  }
  36% {
    transform: rotate(5deg);
  }
  36.5% {
    transform: rotate(-5deg);
  }
  37% {
    transform: rotate(5deg);
  }
  37.5% {
    transform: rotate(-5deg);
  }
  38% {
    transform: rotate(5deg);
  }
  38.5% {
    transform: rotate(-5deg);
  }
  39% {
    transform: rotate(5deg);
  }
  39.5% {
    transform: rotate(-5deg);
  }
  40% {
    transform: rotate(5deg);
  }
  40.5% {
    transform: rotate(-5deg);
  }
  41% {
    transform: rotate(5deg);
  }
  41.5% {
    transform: rotate(-5deg);
  }
  42% {
    transform: rotate(5deg);
  }
  42.5% {
    transform: rotate(-5deg);
  }
  43% {
    transform: rotate(5deg);
  }
  43.5% {
    transform: rotate(-5deg);
  }
  44% {
    transform: rotate(5deg);
  }
  44.5% {
    transform: rotate(-5deg);
  }
  45% {
    transform: rotate(5deg);
  }
  45.5% {
    transform: rotate(-5deg);
  }
  46% {
    transform: rotate(5deg);
  }
  46.5% {
    transform: rotate(-5deg);
  }
  47% {
    transform: rotate(5deg);
  }
  47.5% {
    transform: rotate(-5deg);
  }
  48% {
    transform: rotate(5deg);
  }
  48.5% {
    transform: rotate(-5deg);
  }
  49% {
    transform: rotate(5deg);
  }
  49.5% {
    transform: rotate(-5deg);
  }
  50% {
    transform: rotate(5deg);
  }
  50.5% {
    transform: rotate(-5deg);
  }
  51% {
    transform: rotate(5deg);
  }
  51.5% {
    transform: rotate(-5deg);
  }
  52% {
    transform: rotate(5deg);
  }
  52.5% {
    transform: rotate(-5deg);
  }
  53% {
    transform: rotate(5deg);
  }
  53.5% {
    transform: rotate(-5deg);
  }
  54% {
    transform: rotate(5deg);
  }
  54.5% {
    transform: rotate(-5deg);
  }
  55% {
    transform: rotate(5deg);
  }
  55.5% {
    transform: rotate(-5deg);
  }
  56% {
    transform: rotate(5deg);
  }
  56.5% {
    transform: rotate(-5deg);
  }
  57% {
    transform: rotate(5deg);
  }
  57.5% {
    transform: rotate(-5deg);
  }
  58% {
    transform: rotate(5deg);
  }
  58.5% {
    transform: rotate(-5deg);
  }
  59% {
    transform: rotate(5deg);
  }
  59.5% {
    transform: rotate(-5deg);
  }
  60% {
    transform: rotate(5deg);
  }
  60.5% {
    transform: rotate(-5deg);
  }
  61% {
    transform: rotate(5deg);
  }
  61.5% {
    transform: rotate(-5deg);
  }
  62% {
    transform: rotate(5deg);
  }
  62.5% {
    transform: rotate(-5deg);
  }
  63% {
    transform: rotate(5deg);
  }
  63.5% {
    transform: rotate(-5deg);
  }
  64% {
    transform: rotate(5deg);
  }
  64.5% {
    transform: rotate(-5deg);
  }
  65% {
    transform: rotate(5deg);
  }
  65.5% {
    transform: rotate(-5deg);
  }
  66% {
    transform: rotate(5deg);
  }
  66.5% {
    transform: rotate(-5deg);
  }
  67% {
    transform: rotate(5deg);
  }
  67.5% {
    transform: rotate(-5deg);
  }
  68% {
    transform: rotate(5deg);
  }
  68.5% {
    transform: rotate(-5deg);
  }
  69% {
    transform: rotate(5deg);
  }
  69.5% {
    transform: rotate(-5deg);
  }
  70% {
    transform: rotate(5deg);
  }
  70.5% {
    transform: rotate(-5deg);
  }
  71% {
    transform: rotate(5deg);
  }
  71.5% {
    transform: rotate(-5deg);
  }
  72% {
    transform: rotate(5deg);
  }
  72.5% {
    transform: rotate(-5deg);
  }
  73% {
    transform: rotate(5deg);
  }
  73.5% {
    transform: rotate(-5deg);
  }
  74% {
    transform: rotate(5deg);
  }
  74.5% {
    transform: rotate(-5deg);
  }
  30.3% {
    transform: scaleY(1.3);
  }
  29.3% {
    transform: scaleY(0.9);
  }
  32.3% {
    transform: scaleY(1.2);
  }
  31.3% {
    transform: scaleY(0.8);
  }
  34.3% {
    transform: scaleY(0.8);
  }
  33.3% {
    transform: scaleY(1.5);
  }
  36.3% {
    transform: scaleY(0.8);
  }
  35.3% {
    transform: scaleY(0.7);
  }
  38.3% {
    transform: scaleY(0.9);
  }
  37.3% {
    transform: scaleY(1.3);
  }
  40.3% {
    transform: scaleY(0.7);
  }
  39.3% {
    transform: scaleY(0.8);
  }
  42.3% {
    transform: scaleY(1.4);
  }
  41.3% {
    transform: scaleY(1.2);
  }
  44.3% {
    transform: scaleY(0.8);
  }
  43.3% {
    transform: scaleY(1.1);
  }
  46.3% {
    transform: scaleY(1.1);
  }
  45.3% {
    transform: scaleY(1.1);
  }
  48.3% {
    transform: scaleY(0.6);
  }
  47.3% {
    transform: scaleY(0.7);
  }
  50.3% {
    transform: scaleY(0.7);
  }
  49.3% {
    transform: scaleY(0.7);
  }
  52.3% {
    transform: scaleY(1.2);
  }
  51.3% {
    transform: scaleY(1);
  }
  54.3% {
    transform: scaleY(0.8);
  }
  53.3% {
    transform: scaleY(0.7);
  }
  56.3% {
    transform: scaleY(1.4);
  }
  55.3% {
    transform: scaleY(1.3);
  }
  58.3% {
    transform: scaleY(1.3);
  }
  57.3% {
    transform: scaleY(0.9);
  }
  60.3% {
    transform: scaleY(1.4);
  }
  59.3% {
    transform: scaleY(1.2);
  }
  62.3% {
    transform: scaleY(1.1);
  }
  61.3% {
    transform: scaleY(1);
  }
  64.3% {
    transform: scaleY(1);
  }
  63.3% {
    transform: scaleY(1.1);
  }
  66.3% {
    transform: scaleY(1.5);
  }
  65.3% {
    transform: scaleY(0.9);
  }
  68.3% {
    transform: scaleY(1.4);
  }
  67.3% {
    transform: scaleY(0.8);
  }
  70.3% {
    transform: scaleY(1.5);
  }
  69.3% {
    transform: scaleY(0.7);
  }
  72.3% {
    transform: scaleY(0.6);
  }
  71.3% {
    transform: scaleY(0.7);
  }
  74.3% {
    transform: scaleY(1.4);
  }
  73.3% {
    transform: scaleY(0.6);
  }
  80% {
    transform: rotate(0deg);
    opacity: 1;
  }
  81% {
    opacity: 0;
  }
}
@-webkit-keyframes flicker-1 {
  0% {
    opacicty: 0;
  }
  27% {
    opacity: 0;
  }
  28% {
    opacity: 1;
    transform: rotate(0deg);
  }
  29% {
    transform: rotate(5deg);
  }
  29.5% {
    transform: rotate(-5deg);
  }
  30% {
    transform: rotate(5deg);
  }
  30.5% {
    transform: rotate(-5deg);
  }
  31% {
    transform: rotate(5deg);
  }
  31.5% {
    transform: rotate(-5deg);
  }
  32% {
    transform: rotate(5deg);
  }
  32.5% {
    transform: rotate(-5deg);
  }
  33% {
    transform: rotate(5deg);
  }
  33.5% {
    transform: rotate(-5deg);
  }
  34% {
    transform: rotate(5deg);
  }
  34.5% {
    transform: rotate(-5deg);
  }
  35% {
    transform: rotate(5deg);
  }
  35.5% {
    transform: rotate(-5deg);
  }
  36% {
    transform: rotate(5deg);
  }
  36.5% {
    transform: rotate(-5deg);
  }
  37% {
    transform: rotate(5deg);
  }
  37.5% {
    transform: rotate(-5deg);
  }
  38% {
    transform: rotate(5deg);
  }
  38.5% {
    transform: rotate(-5deg);
  }
  39% {
    transform: rotate(5deg);
  }
  39.5% {
    transform: rotate(-5deg);
  }
  40% {
    transform: rotate(5deg);
  }
  40.5% {
    transform: rotate(-5deg);
  }
  41% {
    transform: rotate(5deg);
  }
  41.5% {
    transform: rotate(-5deg);
  }
  42% {
    transform: rotate(5deg);
  }
  42.5% {
    transform: rotate(-5deg);
  }
  43% {
    transform: rotate(5deg);
  }
  43.5% {
    transform: rotate(-5deg);
  }
  44% {
    transform: rotate(5deg);
  }
  44.5% {
    transform: rotate(-5deg);
  }
  45% {
    transform: rotate(5deg);
  }
  45.5% {
    transform: rotate(-5deg);
  }
  46% {
    transform: rotate(5deg);
  }
  46.5% {
    transform: rotate(-5deg);
  }
  47% {
    transform: rotate(5deg);
  }
  47.5% {
    transform: rotate(-5deg);
  }
  48% {
    transform: rotate(5deg);
  }
  48.5% {
    transform: rotate(-5deg);
  }
  49% {
    transform: rotate(5deg);
  }
  49.5% {
    transform: rotate(-5deg);
  }
  50% {
    transform: rotate(5deg);
  }
  50.5% {
    transform: rotate(-5deg);
  }
  51% {
    transform: rotate(5deg);
  }
  51.5% {
    transform: rotate(-5deg);
  }
  52% {
    transform: rotate(5deg);
  }
  52.5% {
    transform: rotate(-5deg);
  }
  53% {
    transform: rotate(5deg);
  }
  53.5% {
    transform: rotate(-5deg);
  }
  54% {
    transform: rotate(5deg);
  }
  54.5% {
    transform: rotate(-5deg);
  }
  55% {
    transform: rotate(5deg);
  }
  55.5% {
    transform: rotate(-5deg);
  }
  56% {
    transform: rotate(5deg);
  }
  56.5% {
    transform: rotate(-5deg);
  }
  57% {
    transform: rotate(5deg);
  }
  57.5% {
    transform: rotate(-5deg);
  }
  58% {
    transform: rotate(5deg);
  }
  58.5% {
    transform: rotate(-5deg);
  }
  59% {
    transform: rotate(5deg);
  }
  59.5% {
    transform: rotate(-5deg);
  }
  60% {
    transform: rotate(5deg);
  }
  60.5% {
    transform: rotate(-5deg);
  }
  61% {
    transform: rotate(5deg);
  }
  61.5% {
    transform: rotate(-5deg);
  }
  62% {
    transform: rotate(5deg);
  }
  62.5% {
    transform: rotate(-5deg);
  }
  63% {
    transform: rotate(5deg);
  }
  63.5% {
    transform: rotate(-5deg);
  }
  64% {
    transform: rotate(5deg);
  }
  64.5% {
    transform: rotate(-5deg);
  }
  65% {
    transform: rotate(5deg);
  }
  65.5% {
    transform: rotate(-5deg);
  }
  66% {
    transform: rotate(5deg);
  }
  66.5% {
    transform: rotate(-5deg);
  }
  67% {
    transform: rotate(5deg);
  }
  67.5% {
    transform: rotate(-5deg);
  }
  68% {
    transform: rotate(5deg);
  }
  68.5% {
    transform: rotate(-5deg);
  }
  69% {
    transform: rotate(5deg);
  }
  69.5% {
    transform: rotate(-5deg);
  }
  70% {
    transform: rotate(5deg);
  }
  70.5% {
    transform: rotate(-5deg);
  }
  71% {
    transform: rotate(5deg);
  }
  71.5% {
    transform: rotate(-5deg);
  }
  72% {
    transform: rotate(5deg);
  }
  72.5% {
    transform: rotate(-5deg);
  }
  73% {
    transform: rotate(5deg);
  }
  73.5% {
    transform: rotate(-5deg);
  }
  74% {
    transform: rotate(5deg);
  }
  74.5% {
    transform: rotate(-5deg);
  }
  30.3% {
    transform: scaleY(1.2);
  }
  29.3% {
    transform: scaleY(0.8);
  }
  32.3% {
    transform: scaleY(0.9);
  }
  31.3% {
    transform: scaleY(1.2);
  }
  34.3% {
    transform: scaleY(1.3);
  }
  33.3% {
    transform: scaleY(1.4);
  }
  36.3% {
    transform: scaleY(1.4);
  }
  35.3% {
    transform: scaleY(1);
  }
  38.3% {
    transform: scaleY(0.9);
  }
  37.3% {
    transform: scaleY(1.3);
  }
  40.3% {
    transform: scaleY(0.6);
  }
  39.3% {
    transform: scaleY(0.7);
  }
  42.3% {
    transform: scaleY(1.5);
  }
  41.3% {
    transform: scaleY(1.2);
  }
  44.3% {
    transform: scaleY(1.3);
  }
  43.3% {
    transform: scaleY(1.3);
  }
  46.3% {
    transform: scaleY(1.5);
  }
  45.3% {
    transform: scaleY(0.8);
  }
  48.3% {
    transform: scaleY(0.7);
  }
  47.3% {
    transform: scaleY(1.5);
  }
  50.3% {
    transform: scaleY(0.6);
  }
  49.3% {
    transform: scaleY(0.8);
  }
  52.3% {
    transform: scaleY(1.1);
  }
  51.3% {
    transform: scaleY(1.3);
  }
  54.3% {
    transform: scaleY(1);
  }
  53.3% {
    transform: scaleY(0.9);
  }
  56.3% {
    transform: scaleY(1.5);
  }
  55.3% {
    transform: scaleY(0.9);
  }
  58.3% {
    transform: scaleY(1);
  }
  57.3% {
    transform: scaleY(0.8);
  }
  60.3% {
    transform: scaleY(1.3);
  }
  59.3% {
    transform: scaleY(0.7);
  }
  62.3% {
    transform: scaleY(1.5);
  }
  61.3% {
    transform: scaleY(1.2);
  }
  64.3% {
    transform: scaleY(0.7);
  }
  63.3% {
    transform: scaleY(0.8);
  }
  66.3% {
    transform: scaleY(0.8);
  }
  65.3% {
    transform: scaleY(1);
  }
  68.3% {
    transform: scaleY(1.5);
  }
  67.3% {
    transform: scaleY(1);
  }
  70.3% {
    transform: scaleY(1);
  }
  69.3% {
    transform: scaleY(1.2);
  }
  72.3% {
    transform: scaleY(1.4);
  }
  71.3% {
    transform: scaleY(0.7);
  }
  74.3% {
    transform: scaleY(0.7);
  }
  73.3% {
    transform: scaleY(0.7);
  }
  80% {
    transform: rotate(0deg);
    opacity: 1;
  }
  81% {
    opacity: 0;
  }
}
@keyframes flicker-2 {
  0% {
    opacicty: 0;
  }
  27% {
    opacity: 0;
  }
  28% {
    opacity: 1;
    transform: rotate(0deg);
  }
  29% {
    transform: rotate(5deg);
  }
  29.5% {
    transform: rotate(-5deg);
  }
  30% {
    transform: rotate(5deg);
  }
  30.5% {
    transform: rotate(-5deg);
  }
  31% {
    transform: rotate(5deg);
  }
  31.5% {
    transform: rotate(-5deg);
  }
  32% {
    transform: rotate(5deg);
  }
  32.5% {
    transform: rotate(-5deg);
  }
  33% {
    transform: rotate(5deg);
  }
  33.5% {
    transform: rotate(-5deg);
  }
  34% {
    transform: rotate(5deg);
  }
  34.5% {
    transform: rotate(-5deg);
  }
  35% {
    transform: rotate(5deg);
  }
  35.5% {
    transform: rotate(-5deg);
  }
  36% {
    transform: rotate(5deg);
  }
  36.5% {
    transform: rotate(-5deg);
  }
  37% {
    transform: rotate(5deg);
  }
  37.5% {
    transform: rotate(-5deg);
  }
  38% {
    transform: rotate(5deg);
  }
  38.5% {
    transform: rotate(-5deg);
  }
  39% {
    transform: rotate(5deg);
  }
  39.5% {
    transform: rotate(-5deg);
  }
  40% {
    transform: rotate(5deg);
  }
  40.5% {
    transform: rotate(-5deg);
  }
  41% {
    transform: rotate(5deg);
  }
  41.5% {
    transform: rotate(-5deg);
  }
  42% {
    transform: rotate(5deg);
  }
  42.5% {
    transform: rotate(-5deg);
  }
  43% {
    transform: rotate(5deg);
  }
  43.5% {
    transform: rotate(-5deg);
  }
  44% {
    transform: rotate(5deg);
  }
  44.5% {
    transform: rotate(-5deg);
  }
  45% {
    transform: rotate(5deg);
  }
  45.5% {
    transform: rotate(-5deg);
  }
  46% {
    transform: rotate(5deg);
  }
  46.5% {
    transform: rotate(-5deg);
  }
  47% {
    transform: rotate(5deg);
  }
  47.5% {
    transform: rotate(-5deg);
  }
  48% {
    transform: rotate(5deg);
  }
  48.5% {
    transform: rotate(-5deg);
  }
  49% {
    transform: rotate(5deg);
  }
  49.5% {
    transform: rotate(-5deg);
  }
  50% {
    transform: rotate(5deg);
  }
  50.5% {
    transform: rotate(-5deg);
  }
  51% {
    transform: rotate(5deg);
  }
  51.5% {
    transform: rotate(-5deg);
  }
  52% {
    transform: rotate(5deg);
  }
  52.5% {
    transform: rotate(-5deg);
  }
  53% {
    transform: rotate(5deg);
  }
  53.5% {
    transform: rotate(-5deg);
  }
  54% {
    transform: rotate(5deg);
  }
  54.5% {
    transform: rotate(-5deg);
  }
  55% {
    transform: rotate(5deg);
  }
  55.5% {
    transform: rotate(-5deg);
  }
  56% {
    transform: rotate(5deg);
  }
  56.5% {
    transform: rotate(-5deg);
  }
  57% {
    transform: rotate(5deg);
  }
  57.5% {
    transform: rotate(-5deg);
  }
  58% {
    transform: rotate(5deg);
  }
  58.5% {
    transform: rotate(-5deg);
  }
  59% {
    transform: rotate(5deg);
  }
  59.5% {
    transform: rotate(-5deg);
  }
  60% {
    transform: rotate(5deg);
  }
  60.5% {
    transform: rotate(-5deg);
  }
  61% {
    transform: rotate(5deg);
  }
  61.5% {
    transform: rotate(-5deg);
  }
  62% {
    transform: rotate(5deg);
  }
  62.5% {
    transform: rotate(-5deg);
  }
  63% {
    transform: rotate(5deg);
  }
  63.5% {
    transform: rotate(-5deg);
  }
  64% {
    transform: rotate(5deg);
  }
  64.5% {
    transform: rotate(-5deg);
  }
  65% {
    transform: rotate(5deg);
  }
  65.5% {
    transform: rotate(-5deg);
  }
  66% {
    transform: rotate(5deg);
  }
  66.5% {
    transform: rotate(-5deg);
  }
  67% {
    transform: rotate(5deg);
  }
  67.5% {
    transform: rotate(-5deg);
  }
  68% {
    transform: rotate(5deg);
  }
  68.5% {
    transform: rotate(-5deg);
  }
  69% {
    transform: rotate(5deg);
  }
  69.5% {
    transform: rotate(-5deg);
  }
  70% {
    transform: rotate(5deg);
  }
  70.5% {
    transform: rotate(-5deg);
  }
  71% {
    transform: rotate(5deg);
  }
  71.5% {
    transform: rotate(-5deg);
  }
  72% {
    transform: rotate(5deg);
  }
  72.5% {
    transform: rotate(-5deg);
  }
  73% {
    transform: rotate(5deg);
  }
  73.5% {
    transform: rotate(-5deg);
  }
  74% {
    transform: rotate(5deg);
  }
  74.5% {
    transform: rotate(-5deg);
  }
  30.3% {
    transform: scaleY(0.8);
  }
  29.3% {
    transform: scaleY(1.4);
  }
  32.3% {
    transform: scaleY(0.9);
  }
  31.3% {
    transform: scaleY(1.3);
  }
  34.3% {
    transform: scaleY(0.8);
  }
  33.3% {
    transform: scaleY(1.4);
  }
  36.3% {
    transform: scaleY(1.5);
  }
  35.3% {
    transform: scaleY(0.8);
  }
  38.3% {
    transform: scaleY(1);
  }
  37.3% {
    transform: scaleY(1.3);
  }
  40.3% {
    transform: scaleY(1.3);
  }
  39.3% {
    transform: scaleY(1.1);
  }
  42.3% {
    transform: scaleY(0.8);
  }
  41.3% {
    transform: scaleY(0.9);
  }
  44.3% {
    transform: scaleY(0.6);
  }
  43.3% {
    transform: scaleY(1.1);
  }
  46.3% {
    transform: scaleY(0.6);
  }
  45.3% {
    transform: scaleY(1.3);
  }
  48.3% {
    transform: scaleY(1.2);
  }
  47.3% {
    transform: scaleY(1.5);
  }
  50.3% {
    transform: scaleY(1.3);
  }
  49.3% {
    transform: scaleY(1);
  }
  52.3% {
    transform: scaleY(1.4);
  }
  51.3% {
    transform: scaleY(1.2);
  }
  54.3% {
    transform: scaleY(0.7);
  }
  53.3% {
    transform: scaleY(0.6);
  }
  56.3% {
    transform: scaleY(1.2);
  }
  55.3% {
    transform: scaleY(1.4);
  }
  58.3% {
    transform: scaleY(1.3);
  }
  57.3% {
    transform: scaleY(1.5);
  }
  60.3% {
    transform: scaleY(1.1);
  }
  59.3% {
    transform: scaleY(1.3);
  }
  62.3% {
    transform: scaleY(0.7);
  }
  61.3% {
    transform: scaleY(1.3);
  }
  64.3% {
    transform: scaleY(0.7);
  }
  63.3% {
    transform: scaleY(0.8);
  }
  66.3% {
    transform: scaleY(1.1);
  }
  65.3% {
    transform: scaleY(1.4);
  }
  68.3% {
    transform: scaleY(1.4);
  }
  67.3% {
    transform: scaleY(0.9);
  }
  70.3% {
    transform: scaleY(1.5);
  }
  69.3% {
    transform: scaleY(1.5);
  }
  72.3% {
    transform: scaleY(1.2);
  }
  71.3% {
    transform: scaleY(0.6);
  }
  74.3% {
    transform: scaleY(1.2);
  }
  73.3% {
    transform: scaleY(1.1);
  }
  80% {
    transform: rotate(0deg);
    opacity: 1;
  }
  81% {
    opacity: 0;
  }
}
@-webkit-keyframes flicker-2 {
  0% {
    opacicty: 0;
  }
  27% {
    opacity: 0;
  }
  28% {
    opacity: 1;
    transform: rotate(0deg);
  }
  29% {
    transform: rotate(5deg);
  }
  29.5% {
    transform: rotate(-5deg);
  }
  30% {
    transform: rotate(5deg);
  }
  30.5% {
    transform: rotate(-5deg);
  }
  31% {
    transform: rotate(5deg);
  }
  31.5% {
    transform: rotate(-5deg);
  }
  32% {
    transform: rotate(5deg);
  }
  32.5% {
    transform: rotate(-5deg);
  }
  33% {
    transform: rotate(5deg);
  }
  33.5% {
    transform: rotate(-5deg);
  }
  34% {
    transform: rotate(5deg);
  }
  34.5% {
    transform: rotate(-5deg);
  }
  35% {
    transform: rotate(5deg);
  }
  35.5% {
    transform: rotate(-5deg);
  }
  36% {
    transform: rotate(5deg);
  }
  36.5% {
    transform: rotate(-5deg);
  }
  37% {
    transform: rotate(5deg);
  }
  37.5% {
    transform: rotate(-5deg);
  }
  38% {
    transform: rotate(5deg);
  }
  38.5% {
    transform: rotate(-5deg);
  }
  39% {
    transform: rotate(5deg);
  }
  39.5% {
    transform: rotate(-5deg);
  }
  40% {
    transform: rotate(5deg);
  }
  40.5% {
    transform: rotate(-5deg);
  }
  41% {
    transform: rotate(5deg);
  }
  41.5% {
    transform: rotate(-5deg);
  }
  42% {
    transform: rotate(5deg);
  }
  42.5% {
    transform: rotate(-5deg);
  }
  43% {
    transform: rotate(5deg);
  }
  43.5% {
    transform: rotate(-5deg);
  }
  44% {
    transform: rotate(5deg);
  }
  44.5% {
    transform: rotate(-5deg);
  }
  45% {
    transform: rotate(5deg);
  }
  45.5% {
    transform: rotate(-5deg);
  }
  46% {
    transform: rotate(5deg);
  }
  46.5% {
    transform: rotate(-5deg);
  }
  47% {
    transform: rotate(5deg);
  }
  47.5% {
    transform: rotate(-5deg);
  }
  48% {
    transform: rotate(5deg);
  }
  48.5% {
    transform: rotate(-5deg);
  }
  49% {
    transform: rotate(5deg);
  }
  49.5% {
    transform: rotate(-5deg);
  }
  50% {
    transform: rotate(5deg);
  }
  50.5% {
    transform: rotate(-5deg);
  }
  51% {
    transform: rotate(5deg);
  }
  51.5% {
    transform: rotate(-5deg);
  }
  52% {
    transform: rotate(5deg);
  }
  52.5% {
    transform: rotate(-5deg);
  }
  53% {
    transform: rotate(5deg);
  }
  53.5% {
    transform: rotate(-5deg);
  }
  54% {
    transform: rotate(5deg);
  }
  54.5% {
    transform: rotate(-5deg);
  }
  55% {
    transform: rotate(5deg);
  }
  55.5% {
    transform: rotate(-5deg);
  }
  56% {
    transform: rotate(5deg);
  }
  56.5% {
    transform: rotate(-5deg);
  }
  57% {
    transform: rotate(5deg);
  }
  57.5% {
    transform: rotate(-5deg);
  }
  58% {
    transform: rotate(5deg);
  }
  58.5% {
    transform: rotate(-5deg);
  }
  59% {
    transform: rotate(5deg);
  }
  59.5% {
    transform: rotate(-5deg);
  }
  60% {
    transform: rotate(5deg);
  }
  60.5% {
    transform: rotate(-5deg);
  }
  61% {
    transform: rotate(5deg);
  }
  61.5% {
    transform: rotate(-5deg);
  }
  62% {
    transform: rotate(5deg);
  }
  62.5% {
    transform: rotate(-5deg);
  }
  63% {
    transform: rotate(5deg);
  }
  63.5% {
    transform: rotate(-5deg);
  }
  64% {
    transform: rotate(5deg);
  }
  64.5% {
    transform: rotate(-5deg);
  }
  65% {
    transform: rotate(5deg);
  }
  65.5% {
    transform: rotate(-5deg);
  }
  66% {
    transform: rotate(5deg);
  }
  66.5% {
    transform: rotate(-5deg);
  }
  67% {
    transform: rotate(5deg);
  }
  67.5% {
    transform: rotate(-5deg);
  }
  68% {
    transform: rotate(5deg);
  }
  68.5% {
    transform: rotate(-5deg);
  }
  69% {
    transform: rotate(5deg);
  }
  69.5% {
    transform: rotate(-5deg);
  }
  70% {
    transform: rotate(5deg);
  }
  70.5% {
    transform: rotate(-5deg);
  }
  71% {
    transform: rotate(5deg);
  }
  71.5% {
    transform: rotate(-5deg);
  }
  72% {
    transform: rotate(5deg);
  }
  72.5% {
    transform: rotate(-5deg);
  }
  73% {
    transform: rotate(5deg);
  }
  73.5% {
    transform: rotate(-5deg);
  }
  74% {
    transform: rotate(5deg);
  }
  74.5% {
    transform: rotate(-5deg);
  }
  30.3% {
    transform: scaleY(1.3);
  }
  29.3% {
    transform: scaleY(1.2);
  }
  32.3% {
    transform: scaleY(1.5);
  }
  31.3% {
    transform: scaleY(1);
  }
  34.3% {
    transform: scaleY(0.8);
  }
  33.3% {
    transform: scaleY(1.5);
  }
  36.3% {
    transform: scaleY(0.7);
  }
  35.3% {
    transform: scaleY(1.3);
  }
  38.3% {
    transform: scaleY(1.4);
  }
  37.3% {
    transform: scaleY(1.3);
  }
  40.3% {
    transform: scaleY(0.9);
  }
  39.3% {
    transform: scaleY(0.7);
  }
  42.3% {
    transform: scaleY(0.8);
  }
  41.3% {
    transform: scaleY(0.9);
  }
  44.3% {
    transform: scaleY(0.9);
  }
  43.3% {
    transform: scaleY(1.1);
  }
  46.3% {
    transform: scaleY(0.8);
  }
  45.3% {
    transform: scaleY(0.8);
  }
  48.3% {
    transform: scaleY(0.8);
  }
  47.3% {
    transform: scaleY(0.9);
  }
  50.3% {
    transform: scaleY(0.9);
  }
  49.3% {
    transform: scaleY(0.7);
  }
  52.3% {
    transform: scaleY(1.5);
  }
  51.3% {
    transform: scaleY(1);
  }
  54.3% {
    transform: scaleY(1);
  }
  53.3% {
    transform: scaleY(1.4);
  }
  56.3% {
    transform: scaleY(0.7);
  }
  55.3% {
    transform: scaleY(0.9);
  }
  58.3% {
    transform: scaleY(1.2);
  }
  57.3% {
    transform: scaleY(1.4);
  }
  60.3% {
    transform: scaleY(1.1);
  }
  59.3% {
    transform: scaleY(1.2);
  }
  62.3% {
    transform: scaleY(1.3);
  }
  61.3% {
    transform: scaleY(1.4);
  }
  64.3% {
    transform: scaleY(1.4);
  }
  63.3% {
    transform: scaleY(1.1);
  }
  66.3% {
    transform: scaleY(0.6);
  }
  65.3% {
    transform: scaleY(1.1);
  }
  68.3% {
    transform: scaleY(0.7);
  }
  67.3% {
    transform: scaleY(0.7);
  }
  70.3% {
    transform: scaleY(1.3);
  }
  69.3% {
    transform: scaleY(1.1);
  }
  72.3% {
    transform: scaleY(1.3);
  }
  71.3% {
    transform: scaleY(0.8);
  }
  74.3% {
    transform: scaleY(1);
  }
  73.3% {
    transform: scaleY(0.8);
  }
  80% {
    transform: rotate(0deg);
    opacity: 1;
  }
  81% {
    opacity: 0;
  }
}
@keyframes flicker-3 {
  0% {
    opacicty: 0;
  }
  27% {
    opacity: 0;
  }
  28% {
    opacity: 1;
    transform: rotate(0deg);
  }
  29% {
    transform: rotate(5deg);
  }
  29.5% {
    transform: rotate(-5deg);
  }
  30% {
    transform: rotate(5deg);
  }
  30.5% {
    transform: rotate(-5deg);
  }
  31% {
    transform: rotate(5deg);
  }
  31.5% {
    transform: rotate(-5deg);
  }
  32% {
    transform: rotate(5deg);
  }
  32.5% {
    transform: rotate(-5deg);
  }
  33% {
    transform: rotate(5deg);
  }
  33.5% {
    transform: rotate(-5deg);
  }
  34% {
    transform: rotate(5deg);
  }
  34.5% {
    transform: rotate(-5deg);
  }
  35% {
    transform: rotate(5deg);
  }
  35.5% {
    transform: rotate(-5deg);
  }
  36% {
    transform: rotate(5deg);
  }
  36.5% {
    transform: rotate(-5deg);
  }
  37% {
    transform: rotate(5deg);
  }
  37.5% {
    transform: rotate(-5deg);
  }
  38% {
    transform: rotate(5deg);
  }
  38.5% {
    transform: rotate(-5deg);
  }
  39% {
    transform: rotate(5deg);
  }
  39.5% {
    transform: rotate(-5deg);
  }
  40% {
    transform: rotate(5deg);
  }
  40.5% {
    transform: rotate(-5deg);
  }
  41% {
    transform: rotate(5deg);
  }
  41.5% {
    transform: rotate(-5deg);
  }
  42% {
    transform: rotate(5deg);
  }
  42.5% {
    transform: rotate(-5deg);
  }
  43% {
    transform: rotate(5deg);
  }
  43.5% {
    transform: rotate(-5deg);
  }
  44% {
    transform: rotate(5deg);
  }
  44.5% {
    transform: rotate(-5deg);
  }
  45% {
    transform: rotate(5deg);
  }
  45.5% {
    transform: rotate(-5deg);
  }
  46% {
    transform: rotate(5deg);
  }
  46.5% {
    transform: rotate(-5deg);
  }
  47% {
    transform: rotate(5deg);
  }
  47.5% {
    transform: rotate(-5deg);
  }
  48% {
    transform: rotate(5deg);
  }
  48.5% {
    transform: rotate(-5deg);
  }
  49% {
    transform: rotate(5deg);
  }
  49.5% {
    transform: rotate(-5deg);
  }
  50% {
    transform: rotate(5deg);
  }
  50.5% {
    transform: rotate(-5deg);
  }
  51% {
    transform: rotate(5deg);
  }
  51.5% {
    transform: rotate(-5deg);
  }
  52% {
    transform: rotate(5deg);
  }
  52.5% {
    transform: rotate(-5deg);
  }
  53% {
    transform: rotate(5deg);
  }
  53.5% {
    transform: rotate(-5deg);
  }
  54% {
    transform: rotate(5deg);
  }
  54.5% {
    transform: rotate(-5deg);
  }
  55% {
    transform: rotate(5deg);
  }
  55.5% {
    transform: rotate(-5deg);
  }
  56% {
    transform: rotate(5deg);
  }
  56.5% {
    transform: rotate(-5deg);
  }
  57% {
    transform: rotate(5deg);
  }
  57.5% {
    transform: rotate(-5deg);
  }
  58% {
    transform: rotate(5deg);
  }
  58.5% {
    transform: rotate(-5deg);
  }
  59% {
    transform: rotate(5deg);
  }
  59.5% {
    transform: rotate(-5deg);
  }
  60% {
    transform: rotate(5deg);
  }
  60.5% {
    transform: rotate(-5deg);
  }
  61% {
    transform: rotate(5deg);
  }
  61.5% {
    transform: rotate(-5deg);
  }
  62% {
    transform: rotate(5deg);
  }
  62.5% {
    transform: rotate(-5deg);
  }
  63% {
    transform: rotate(5deg);
  }
  63.5% {
    transform: rotate(-5deg);
  }
  64% {
    transform: rotate(5deg);
  }
  64.5% {
    transform: rotate(-5deg);
  }
  65% {
    transform: rotate(5deg);
  }
  65.5% {
    transform: rotate(-5deg);
  }
  66% {
    transform: rotate(5deg);
  }
  66.5% {
    transform: rotate(-5deg);
  }
  67% {
    transform: rotate(5deg);
  }
  67.5% {
    transform: rotate(-5deg);
  }
  68% {
    transform: rotate(5deg);
  }
  68.5% {
    transform: rotate(-5deg);
  }
  69% {
    transform: rotate(5deg);
  }
  69.5% {
    transform: rotate(-5deg);
  }
  70% {
    transform: rotate(5deg);
  }
  70.5% {
    transform: rotate(-5deg);
  }
  71% {
    transform: rotate(5deg);
  }
  71.5% {
    transform: rotate(-5deg);
  }
  72% {
    transform: rotate(5deg);
  }
  72.5% {
    transform: rotate(-5deg);
  }
  73% {
    transform: rotate(5deg);
  }
  73.5% {
    transform: rotate(-5deg);
  }
  74% {
    transform: rotate(5deg);
  }
  74.5% {
    transform: rotate(-5deg);
  }
  30.3% {
    transform: scaleY(0.6);
  }
  29.3% {
    transform: scaleY(1.1);
  }
  32.3% {
    transform: scaleY(1.4);
  }
  31.3% {
    transform: scaleY(1.1);
  }
  34.3% {
    transform: scaleY(0.6);
  }
  33.3% {
    transform: scaleY(1.2);
  }
  36.3% {
    transform: scaleY(1);
  }
  35.3% {
    transform: scaleY(1);
  }
  38.3% {
    transform: scaleY(1.3);
  }
  37.3% {
    transform: scaleY(1.5);
  }
  40.3% {
    transform: scaleY(0.8);
  }
  39.3% {
    transform: scaleY(0.7);
  }
  42.3% {
    transform: scaleY(0.9);
  }
  41.3% {
    transform: scaleY(1.4);
  }
  44.3% {
    transform: scaleY(0.8);
  }
  43.3% {
    transform: scaleY(0.6);
  }
  46.3% {
    transform: scaleY(1.3);
  }
  45.3% {
    transform: scaleY(0.8);
  }
  48.3% {
    transform: scaleY(1.3);
  }
  47.3% {
    transform: scaleY(0.8);
  }
  50.3% {
    transform: scaleY(1);
  }
  49.3% {
    transform: scaleY(1.5);
  }
  52.3% {
    transform: scaleY(1.3);
  }
  51.3% {
    transform: scaleY(1.3);
  }
  54.3% {
    transform: scaleY(0.6);
  }
  53.3% {
    transform: scaleY(0.9);
  }
  56.3% {
    transform: scaleY(0.9);
  }
  55.3% {
    transform: scaleY(0.7);
  }
  58.3% {
    transform: scaleY(1);
  }
  57.3% {
    transform: scaleY(1.5);
  }
  60.3% {
    transform: scaleY(1.5);
  }
  59.3% {
    transform: scaleY(1.1);
  }
  62.3% {
    transform: scaleY(1.4);
  }
  61.3% {
    transform: scaleY(1.2);
  }
  64.3% {
    transform: scaleY(0.8);
  }
  63.3% {
    transform: scaleY(1.1);
  }
  66.3% {
    transform: scaleY(1.1);
  }
  65.3% {
    transform: scaleY(0.7);
  }
  68.3% {
    transform: scaleY(0.8);
  }
  67.3% {
    transform: scaleY(0.6);
  }
  70.3% {
    transform: scaleY(1.5);
  }
  69.3% {
    transform: scaleY(1.2);
  }
  72.3% {
    transform: scaleY(1.1);
  }
  71.3% {
    transform: scaleY(1.1);
  }
  74.3% {
    transform: scaleY(1.3);
  }
  73.3% {
    transform: scaleY(1.4);
  }
  80% {
    transform: rotate(0deg);
    opacity: 1;
  }
  81% {
    opacity: 0;
  }
}
@-webkit-keyframes flicker-3 {
  0% {
    opacicty: 0;
  }
  27% {
    opacity: 0;
  }
  28% {
    opacity: 1;
    transform: rotate(0deg);
  }
  29% {
    transform: rotate(5deg);
  }
  29.5% {
    transform: rotate(-5deg);
  }
  30% {
    transform: rotate(5deg);
  }
  30.5% {
    transform: rotate(-5deg);
  }
  31% {
    transform: rotate(5deg);
  }
  31.5% {
    transform: rotate(-5deg);
  }
  32% {
    transform: rotate(5deg);
  }
  32.5% {
    transform: rotate(-5deg);
  }
  33% {
    transform: rotate(5deg);
  }
  33.5% {
    transform: rotate(-5deg);
  }
  34% {
    transform: rotate(5deg);
  }
  34.5% {
    transform: rotate(-5deg);
  }
  35% {
    transform: rotate(5deg);
  }
  35.5% {
    transform: rotate(-5deg);
  }
  36% {
    transform: rotate(5deg);
  }
  36.5% {
    transform: rotate(-5deg);
  }
  37% {
    transform: rotate(5deg);
  }
  37.5% {
    transform: rotate(-5deg);
  }
  38% {
    transform: rotate(5deg);
  }
  38.5% {
    transform: rotate(-5deg);
  }
  39% {
    transform: rotate(5deg);
  }
  39.5% {
    transform: rotate(-5deg);
  }
  40% {
    transform: rotate(5deg);
  }
  40.5% {
    transform: rotate(-5deg);
  }
  41% {
    transform: rotate(5deg);
  }
  41.5% {
    transform: rotate(-5deg);
  }
  42% {
    transform: rotate(5deg);
  }
  42.5% {
    transform: rotate(-5deg);
  }
  43% {
    transform: rotate(5deg);
  }
  43.5% {
    transform: rotate(-5deg);
  }
  44% {
    transform: rotate(5deg);
  }
  44.5% {
    transform: rotate(-5deg);
  }
  45% {
    transform: rotate(5deg);
  }
  45.5% {
    transform: rotate(-5deg);
  }
  46% {
    transform: rotate(5deg);
  }
  46.5% {
    transform: rotate(-5deg);
  }
  47% {
    transform: rotate(5deg);
  }
  47.5% {
    transform: rotate(-5deg);
  }
  48% {
    transform: rotate(5deg);
  }
  48.5% {
    transform: rotate(-5deg);
  }
  49% {
    transform: rotate(5deg);
  }
  49.5% {
    transform: rotate(-5deg);
  }
  50% {
    transform: rotate(5deg);
  }
  50.5% {
    transform: rotate(-5deg);
  }
  51% {
    transform: rotate(5deg);
  }
  51.5% {
    transform: rotate(-5deg);
  }
  52% {
    transform: rotate(5deg);
  }
  52.5% {
    transform: rotate(-5deg);
  }
  53% {
    transform: rotate(5deg);
  }
  53.5% {
    transform: rotate(-5deg);
  }
  54% {
    transform: rotate(5deg);
  }
  54.5% {
    transform: rotate(-5deg);
  }
  55% {
    transform: rotate(5deg);
  }
  55.5% {
    transform: rotate(-5deg);
  }
  56% {
    transform: rotate(5deg);
  }
  56.5% {
    transform: rotate(-5deg);
  }
  57% {
    transform: rotate(5deg);
  }
  57.5% {
    transform: rotate(-5deg);
  }
  58% {
    transform: rotate(5deg);
  }
  58.5% {
    transform: rotate(-5deg);
  }
  59% {
    transform: rotate(5deg);
  }
  59.5% {
    transform: rotate(-5deg);
  }
  60% {
    transform: rotate(5deg);
  }
  60.5% {
    transform: rotate(-5deg);
  }
  61% {
    transform: rotate(5deg);
  }
  61.5% {
    transform: rotate(-5deg);
  }
  62% {
    transform: rotate(5deg);
  }
  62.5% {
    transform: rotate(-5deg);
  }
  63% {
    transform: rotate(5deg);
  }
  63.5% {
    transform: rotate(-5deg);
  }
  64% {
    transform: rotate(5deg);
  }
  64.5% {
    transform: rotate(-5deg);
  }
  65% {
    transform: rotate(5deg);
  }
  65.5% {
    transform: rotate(-5deg);
  }
  66% {
    transform: rotate(5deg);
  }
  66.5% {
    transform: rotate(-5deg);
  }
  67% {
    transform: rotate(5deg);
  }
  67.5% {
    transform: rotate(-5deg);
  }
  68% {
    transform: rotate(5deg);
  }
  68.5% {
    transform: rotate(-5deg);
  }
  69% {
    transform: rotate(5deg);
  }
  69.5% {
    transform: rotate(-5deg);
  }
  70% {
    transform: rotate(5deg);
  }
  70.5% {
    transform: rotate(-5deg);
  }
  71% {
    transform: rotate(5deg);
  }
  71.5% {
    transform: rotate(-5deg);
  }
  72% {
    transform: rotate(5deg);
  }
  72.5% {
    transform: rotate(-5deg);
  }
  73% {
    transform: rotate(5deg);
  }
  73.5% {
    transform: rotate(-5deg);
  }
  74% {
    transform: rotate(5deg);
  }
  74.5% {
    transform: rotate(-5deg);
  }
  30.3% {
    transform: scaleY(1.5);
  }
  29.3% {
    transform: scaleY(0.6);
  }
  32.3% {
    transform: scaleY(1.1);
  }
  31.3% {
    transform: scaleY(1.5);
  }
  34.3% {
    transform: scaleY(1.5);
  }
  33.3% {
    transform: scaleY(1.1);
  }
  36.3% {
    transform: scaleY(1.1);
  }
  35.3% {
    transform: scaleY(0.6);
  }
  38.3% {
    transform: scaleY(1.5);
  }
  37.3% {
    transform: scaleY(1.3);
  }
  40.3% {
    transform: scaleY(1.5);
  }
  39.3% {
    transform: scaleY(0.7);
  }
  42.3% {
    transform: scaleY(1.5);
  }
  41.3% {
    transform: scaleY(1.2);
  }
  44.3% {
    transform: scaleY(1.3);
  }
  43.3% {
    transform: scaleY(1.1);
  }
  46.3% {
    transform: scaleY(1.1);
  }
  45.3% {
    transform: scaleY(1);
  }
  48.3% {
    transform: scaleY(0.8);
  }
  47.3% {
    transform: scaleY(0.6);
  }
  50.3% {
    transform: scaleY(1.2);
  }
  49.3% {
    transform: scaleY(0.9);
  }
  52.3% {
    transform: scaleY(1.5);
  }
  51.3% {
    transform: scaleY(1.4);
  }
  54.3% {
    transform: scaleY(0.7);
  }
  53.3% {
    transform: scaleY(0.7);
  }
  56.3% {
    transform: scaleY(1.4);
  }
  55.3% {
    transform: scaleY(1.1);
  }
  58.3% {
    transform: scaleY(0.7);
  }
  57.3% {
    transform: scaleY(1.4);
  }
  60.3% {
    transform: scaleY(1.5);
  }
  59.3% {
    transform: scaleY(1.3);
  }
  62.3% {
    transform: scaleY(0.6);
  }
  61.3% {
    transform: scaleY(0.6);
  }
  64.3% {
    transform: scaleY(0.9);
  }
  63.3% {
    transform: scaleY(1.4);
  }
  66.3% {
    transform: scaleY(0.9);
  }
  65.3% {
    transform: scaleY(1.3);
  }
  68.3% {
    transform: scaleY(1.3);
  }
  67.3% {
    transform: scaleY(1.2);
  }
  70.3% {
    transform: scaleY(1.5);
  }
  69.3% {
    transform: scaleY(0.8);
  }
  72.3% {
    transform: scaleY(1.1);
  }
  71.3% {
    transform: scaleY(1.2);
  }
  74.3% {
    transform: scaleY(1);
  }
  73.3% {
    transform: scaleY(1.2);
  }
  80% {
    transform: rotate(0deg);
    opacity: 1;
  }
  81% {
    opacity: 0;
  }
}
@keyframes flicker-4 {
  0% {
    opacicty: 0;
  }
  27% {
    opacity: 0;
  }
  28% {
    opacity: 1;
    transform: rotate(0deg);
  }
  29% {
    transform: rotate(5deg);
  }
  29.5% {
    transform: rotate(-5deg);
  }
  30% {
    transform: rotate(5deg);
  }
  30.5% {
    transform: rotate(-5deg);
  }
  31% {
    transform: rotate(5deg);
  }
  31.5% {
    transform: rotate(-5deg);
  }
  32% {
    transform: rotate(5deg);
  }
  32.5% {
    transform: rotate(-5deg);
  }
  33% {
    transform: rotate(5deg);
  }
  33.5% {
    transform: rotate(-5deg);
  }
  34% {
    transform: rotate(5deg);
  }
  34.5% {
    transform: rotate(-5deg);
  }
  35% {
    transform: rotate(5deg);
  }
  35.5% {
    transform: rotate(-5deg);
  }
  36% {
    transform: rotate(5deg);
  }
  36.5% {
    transform: rotate(-5deg);
  }
  37% {
    transform: rotate(5deg);
  }
  37.5% {
    transform: rotate(-5deg);
  }
  38% {
    transform: rotate(5deg);
  }
  38.5% {
    transform: rotate(-5deg);
  }
  39% {
    transform: rotate(5deg);
  }
  39.5% {
    transform: rotate(-5deg);
  }
  40% {
    transform: rotate(5deg);
  }
  40.5% {
    transform: rotate(-5deg);
  }
  41% {
    transform: rotate(5deg);
  }
  41.5% {
    transform: rotate(-5deg);
  }
  42% {
    transform: rotate(5deg);
  }
  42.5% {
    transform: rotate(-5deg);
  }
  43% {
    transform: rotate(5deg);
  }
  43.5% {
    transform: rotate(-5deg);
  }
  44% {
    transform: rotate(5deg);
  }
  44.5% {
    transform: rotate(-5deg);
  }
  45% {
    transform: rotate(5deg);
  }
  45.5% {
    transform: rotate(-5deg);
  }
  46% {
    transform: rotate(5deg);
  }
  46.5% {
    transform: rotate(-5deg);
  }
  47% {
    transform: rotate(5deg);
  }
  47.5% {
    transform: rotate(-5deg);
  }
  48% {
    transform: rotate(5deg);
  }
  48.5% {
    transform: rotate(-5deg);
  }
  49% {
    transform: rotate(5deg);
  }
  49.5% {
    transform: rotate(-5deg);
  }
  50% {
    transform: rotate(5deg);
  }
  50.5% {
    transform: rotate(-5deg);
  }
  51% {
    transform: rotate(5deg);
  }
  51.5% {
    transform: rotate(-5deg);
  }
  52% {
    transform: rotate(5deg);
  }
  52.5% {
    transform: rotate(-5deg);
  }
  53% {
    transform: rotate(5deg);
  }
  53.5% {
    transform: rotate(-5deg);
  }
  54% {
    transform: rotate(5deg);
  }
  54.5% {
    transform: rotate(-5deg);
  }
  55% {
    transform: rotate(5deg);
  }
  55.5% {
    transform: rotate(-5deg);
  }
  56% {
    transform: rotate(5deg);
  }
  56.5% {
    transform: rotate(-5deg);
  }
  57% {
    transform: rotate(5deg);
  }
  57.5% {
    transform: rotate(-5deg);
  }
  58% {
    transform: rotate(5deg);
  }
  58.5% {
    transform: rotate(-5deg);
  }
  59% {
    transform: rotate(5deg);
  }
  59.5% {
    transform: rotate(-5deg);
  }
  60% {
    transform: rotate(5deg);
  }
  60.5% {
    transform: rotate(-5deg);
  }
  61% {
    transform: rotate(5deg);
  }
  61.5% {
    transform: rotate(-5deg);
  }
  62% {
    transform: rotate(5deg);
  }
  62.5% {
    transform: rotate(-5deg);
  }
  63% {
    transform: rotate(5deg);
  }
  63.5% {
    transform: rotate(-5deg);
  }
  64% {
    transform: rotate(5deg);
  }
  64.5% {
    transform: rotate(-5deg);
  }
  65% {
    transform: rotate(5deg);
  }
  65.5% {
    transform: rotate(-5deg);
  }
  66% {
    transform: rotate(5deg);
  }
  66.5% {
    transform: rotate(-5deg);
  }
  67% {
    transform: rotate(5deg);
  }
  67.5% {
    transform: rotate(-5deg);
  }
  68% {
    transform: rotate(5deg);
  }
  68.5% {
    transform: rotate(-5deg);
  }
  69% {
    transform: rotate(5deg);
  }
  69.5% {
    transform: rotate(-5deg);
  }
  70% {
    transform: rotate(5deg);
  }
  70.5% {
    transform: rotate(-5deg);
  }
  71% {
    transform: rotate(5deg);
  }
  71.5% {
    transform: rotate(-5deg);
  }
  72% {
    transform: rotate(5deg);
  }
  72.5% {
    transform: rotate(-5deg);
  }
  73% {
    transform: rotate(5deg);
  }
  73.5% {
    transform: rotate(-5deg);
  }
  74% {
    transform: rotate(5deg);
  }
  74.5% {
    transform: rotate(-5deg);
  }
  30.3% {
    transform: scaleY(1);
  }
  29.3% {
    transform: scaleY(1.4);
  }
  32.3% {
    transform: scaleY(0.7);
  }
  31.3% {
    transform: scaleY(0.6);
  }
  34.3% {
    transform: scaleY(1);
  }
  33.3% {
    transform: scaleY(0.7);
  }
  36.3% {
    transform: scaleY(0.9);
  }
  35.3% {
    transform: scaleY(1.5);
  }
  38.3% {
    transform: scaleY(1.4);
  }
  37.3% {
    transform: scaleY(1.2);
  }
  40.3% {
    transform: scaleY(1);
  }
  39.3% {
    transform: scaleY(1.5);
  }
  42.3% {
    transform: scaleY(1.1);
  }
  41.3% {
    transform: scaleY(0.9);
  }
  44.3% {
    transform: scaleY(1.5);
  }
  43.3% {
    transform: scaleY(1.4);
  }
  46.3% {
    transform: scaleY(1.3);
  }
  45.3% {
    transform: scaleY(0.7);
  }
  48.3% {
    transform: scaleY(1);
  }
  47.3% {
    transform: scaleY(0.8);
  }
  50.3% {
    transform: scaleY(0.6);
  }
  49.3% {
    transform: scaleY(1.4);
  }
  52.3% {
    transform: scaleY(0.9);
  }
  51.3% {
    transform: scaleY(0.9);
  }
  54.3% {
    transform: scaleY(1.1);
  }
  53.3% {
    transform: scaleY(1.1);
  }
  56.3% {
    transform: scaleY(0.6);
  }
  55.3% {
    transform: scaleY(1.3);
  }
  58.3% {
    transform: scaleY(1.1);
  }
  57.3% {
    transform: scaleY(1.1);
  }
  60.3% {
    transform: scaleY(0.7);
  }
  59.3% {
    transform: scaleY(0.8);
  }
  62.3% {
    transform: scaleY(0.7);
  }
  61.3% {
    transform: scaleY(0.6);
  }
  64.3% {
    transform: scaleY(1.5);
  }
  63.3% {
    transform: scaleY(1.2);
  }
  66.3% {
    transform: scaleY(1.4);
  }
  65.3% {
    transform: scaleY(1.2);
  }
  68.3% {
    transform: scaleY(0.7);
  }
  67.3% {
    transform: scaleY(1.1);
  }
  70.3% {
    transform: scaleY(1.3);
  }
  69.3% {
    transform: scaleY(0.7);
  }
  72.3% {
    transform: scaleY(1);
  }
  71.3% {
    transform: scaleY(0.7);
  }
  74.3% {
    transform: scaleY(1.2);
  }
  73.3% {
    transform: scaleY(0.9);
  }
  80% {
    transform: rotate(0deg);
    opacity: 1;
  }
  81% {
    opacity: 0;
  }
}
@-webkit-keyframes flicker-4 {
  0% {
    opacicty: 0;
  }
  27% {
    opacity: 0;
  }
  28% {
    opacity: 1;
    transform: rotate(0deg);
  }
  29% {
    transform: rotate(5deg);
  }
  29.5% {
    transform: rotate(-5deg);
  }
  30% {
    transform: rotate(5deg);
  }
  30.5% {
    transform: rotate(-5deg);
  }
  31% {
    transform: rotate(5deg);
  }
  31.5% {
    transform: rotate(-5deg);
  }
  32% {
    transform: rotate(5deg);
  }
  32.5% {
    transform: rotate(-5deg);
  }
  33% {
    transform: rotate(5deg);
  }
  33.5% {
    transform: rotate(-5deg);
  }
  34% {
    transform: rotate(5deg);
  }
  34.5% {
    transform: rotate(-5deg);
  }
  35% {
    transform: rotate(5deg);
  }
  35.5% {
    transform: rotate(-5deg);
  }
  36% {
    transform: rotate(5deg);
  }
  36.5% {
    transform: rotate(-5deg);
  }
  37% {
    transform: rotate(5deg);
  }
  37.5% {
    transform: rotate(-5deg);
  }
  38% {
    transform: rotate(5deg);
  }
  38.5% {
    transform: rotate(-5deg);
  }
  39% {
    transform: rotate(5deg);
  }
  39.5% {
    transform: rotate(-5deg);
  }
  40% {
    transform: rotate(5deg);
  }
  40.5% {
    transform: rotate(-5deg);
  }
  41% {
    transform: rotate(5deg);
  }
  41.5% {
    transform: rotate(-5deg);
  }
  42% {
    transform: rotate(5deg);
  }
  42.5% {
    transform: rotate(-5deg);
  }
  43% {
    transform: rotate(5deg);
  }
  43.5% {
    transform: rotate(-5deg);
  }
  44% {
    transform: rotate(5deg);
  }
  44.5% {
    transform: rotate(-5deg);
  }
  45% {
    transform: rotate(5deg);
  }
  45.5% {
    transform: rotate(-5deg);
  }
  46% {
    transform: rotate(5deg);
  }
  46.5% {
    transform: rotate(-5deg);
  }
  47% {
    transform: rotate(5deg);
  }
  47.5% {
    transform: rotate(-5deg);
  }
  48% {
    transform: rotate(5deg);
  }
  48.5% {
    transform: rotate(-5deg);
  }
  49% {
    transform: rotate(5deg);
  }
  49.5% {
    transform: rotate(-5deg);
  }
  50% {
    transform: rotate(5deg);
  }
  50.5% {
    transform: rotate(-5deg);
  }
  51% {
    transform: rotate(5deg);
  }
  51.5% {
    transform: rotate(-5deg);
  }
  52% {
    transform: rotate(5deg);
  }
  52.5% {
    transform: rotate(-5deg);
  }
  53% {
    transform: rotate(5deg);
  }
  53.5% {
    transform: rotate(-5deg);
  }
  54% {
    transform: rotate(5deg);
  }
  54.5% {
    transform: rotate(-5deg);
  }
  55% {
    transform: rotate(5deg);
  }
  55.5% {
    transform: rotate(-5deg);
  }
  56% {
    transform: rotate(5deg);
  }
  56.5% {
    transform: rotate(-5deg);
  }
  57% {
    transform: rotate(5deg);
  }
  57.5% {
    transform: rotate(-5deg);
  }
  58% {
    transform: rotate(5deg);
  }
  58.5% {
    transform: rotate(-5deg);
  }
  59% {
    transform: rotate(5deg);
  }
  59.5% {
    transform: rotate(-5deg);
  }
  60% {
    transform: rotate(5deg);
  }
  60.5% {
    transform: rotate(-5deg);
  }
  61% {
    transform: rotate(5deg);
  }
  61.5% {
    transform: rotate(-5deg);
  }
  62% {
    transform: rotate(5deg);
  }
  62.5% {
    transform: rotate(-5deg);
  }
  63% {
    transform: rotate(5deg);
  }
  63.5% {
    transform: rotate(-5deg);
  }
  64% {
    transform: rotate(5deg);
  }
  64.5% {
    transform: rotate(-5deg);
  }
  65% {
    transform: rotate(5deg);
  }
  65.5% {
    transform: rotate(-5deg);
  }
  66% {
    transform: rotate(5deg);
  }
  66.5% {
    transform: rotate(-5deg);
  }
  67% {
    transform: rotate(5deg);
  }
  67.5% {
    transform: rotate(-5deg);
  }
  68% {
    transform: rotate(5deg);
  }
  68.5% {
    transform: rotate(-5deg);
  }
  69% {
    transform: rotate(5deg);
  }
  69.5% {
    transform: rotate(-5deg);
  }
  70% {
    transform: rotate(5deg);
  }
  70.5% {
    transform: rotate(-5deg);
  }
  71% {
    transform: rotate(5deg);
  }
  71.5% {
    transform: rotate(-5deg);
  }
  72% {
    transform: rotate(5deg);
  }
  72.5% {
    transform: rotate(-5deg);
  }
  73% {
    transform: rotate(5deg);
  }
  73.5% {
    transform: rotate(-5deg);
  }
  74% {
    transform: rotate(5deg);
  }
  74.5% {
    transform: rotate(-5deg);
  }
  30.3% {
    transform: scaleY(0.7);
  }
  29.3% {
    transform: scaleY(1.4);
  }
  32.3% {
    transform: scaleY(0.6);
  }
  31.3% {
    transform: scaleY(1.4);
  }
  34.3% {
    transform: scaleY(0.8);
  }
  33.3% {
    transform: scaleY(1);
  }
  36.3% {
    transform: scaleY(1.3);
  }
  35.3% {
    transform: scaleY(1.3);
  }
  38.3% {
    transform: scaleY(1.5);
  }
  37.3% {
    transform: scaleY(1.2);
  }
  40.3% {
    transform: scaleY(1.1);
  }
  39.3% {
    transform: scaleY(0.8);
  }
  42.3% {
    transform: scaleY(1.5);
  }
  41.3% {
    transform: scaleY(1);
  }
  44.3% {
    transform: scaleY(1.3);
  }
  43.3% {
    transform: scaleY(1.1);
  }
  46.3% {
    transform: scaleY(0.9);
  }
  45.3% {
    transform: scaleY(0.9);
  }
  48.3% {
    transform: scaleY(1.4);
  }
  47.3% {
    transform: scaleY(0.9);
  }
  50.3% {
    transform: scaleY(0.9);
  }
  49.3% {
    transform: scaleY(0.6);
  }
  52.3% {
    transform: scaleY(1.1);
  }
  51.3% {
    transform: scaleY(1.4);
  }
  54.3% {
    transform: scaleY(1.5);
  }
  53.3% {
    transform: scaleY(1.5);
  }
  56.3% {
    transform: scaleY(0.6);
  }
  55.3% {
    transform: scaleY(1.1);
  }
  58.3% {
    transform: scaleY(1.2);
  }
  57.3% {
    transform: scaleY(0.7);
  }
  60.3% {
    transform: scaleY(1);
  }
  59.3% {
    transform: scaleY(1.1);
  }
  62.3% {
    transform: scaleY(1.5);
  }
  61.3% {
    transform: scaleY(1.4);
  }
  64.3% {
    transform: scaleY(1.5);
  }
  63.3% {
    transform: scaleY(0.7);
  }
  66.3% {
    transform: scaleY(1.5);
  }
  65.3% {
    transform: scaleY(1.5);
  }
  68.3% {
    transform: scaleY(1.4);
  }
  67.3% {
    transform: scaleY(1.5);
  }
  70.3% {
    transform: scaleY(0.7);
  }
  69.3% {
    transform: scaleY(1.3);
  }
  72.3% {
    transform: scaleY(0.6);
  }
  71.3% {
    transform: scaleY(0.7);
  }
  74.3% {
    transform: scaleY(1.4);
  }
  73.3% {
    transform: scaleY(1.3);
  }
  80% {
    transform: rotate(0deg);
    opacity: 1;
  }
  81% {
    opacity: 0;
  }
}
.btn {
    display: inline-block;
    padding: 1rem 2rem;
    border-radius: 2px;
  }
  
  .btn-show-all {
    font-size: 2rem;
    background: var(--main-gray);
    transition: background 0.3s ease-out;
  }
  
  .btn-show-all:hover {
    background: var(--main-red);
  }
  
  .btn-show-all:hover > i {
    transform: translateX(2px);
  }
  
  .btn-show-all > i {
    margin-left: 10px;
    transform: translateX(0);
    transition: transform 0.3s ease-out;
  }
</style>