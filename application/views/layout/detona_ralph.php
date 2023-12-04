<style>
.container {
    display: flex;
    flex-direction: column;
    height: 100vh;
    background-image: url(<?php echo base_url('assets/images/wall.png');?>);
}

.menu {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    height: 90px;
    width: 100%;
    background-color: #000000;
    color: #ffffff;
    border-bottom: 5px solid #ffd700;
}

.panel {
    margin-top: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.square {
    height: 150px;
    border: 1px solid #000000;
    width: 150px;
    background-color: #43fabd;
}

.enemy {
    background-image: url(<?php echo base_url('assets/images/ralph.png');?>);
    background-size: cover;
}

.menu-lives {
    display: flex;
    align-items: center;
    justify-content: center;
}

.menu-time h2:nth-child(2),
.menu-score h2:nth-child(2){
    margin-top: 10px;
}

</style>