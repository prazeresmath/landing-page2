<style>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #fc1e8a;
    user-select: none;
}

.container {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 30px;
    background: linear-gradient(325deg, #03001e 0%, #7303C0 30%, #ec38bc 70%, #fdeff8 100%);
    padding: 40px 60px;
}

h2 {
    font-size: 3em;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 0.1em;
}

.reset {
    padding: 15px 20px;
    width: 100%;
    color: #000;
    background-color: #fff;
    border: none;
    font-family: 1.5em;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    cursor: pointer;
    font-weight: 600;
}

.reset:focus {
    color: #ec38bc;
    background-color: #262809;
}

.game {
    width: 430px;
    height: 420px;
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    transform-style: preserve-3d;
    perspective: 500px;
}

.item {
    position: relative;
    width: 100px;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #fff;
    font-size: 3em;
    transform: rotateY(180deg);
    transition: 0.25s;
}

.item::after{
    content: "";
    position: absolute;
    inset: 0;
    background: #404040;
    transition: 0.25s;
    transform: rotateY(0deg);
    backface-visibility: hidden;
}

.item.boxOpen {
    transform: rotateY(0deg);
}

.boxOpen::after,
.boxMatch::after {
    transform: rotateY(180deg);
}
</style>