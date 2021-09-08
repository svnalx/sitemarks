<style>
    body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
        font-family:"Open Sans Light", Candara, Arial, sans-serif;
        background-color:#1884df;
    }
/*
    PANELS
*/
    .left-panels {
        display:flex;
        flex:1;
        min-width:300px;
        flex-flow:column nowrap;
        min-height:450px;
        background-color:#4d4e53;
    }
    .left-panel-1 {
        background-color:#4d4e53;
        width:280px;
        height:500px;
        height:auto;
        padding:10px;
    }
    .left-panel-2 {
        background-color:#4d4e53;
        width:280px;
        height:200px;
        height:auto;
        padding:10px;
    }
    .right-panels {
        display:flex;
        -webkit-justify-content: flex-start;
        justify-content:flex-start;
        flex:4;
        flex-flow:column;
        min-height:100px;
        min-height:87vh;
        width:1px;
        background-color:#F7FBFF;
        background-color:#aba5b5;
        background-color:#bac0de;
        background-color:#e1e4f1;
    }   
    .right-panels-1-2-container {
        display:flex;
        flex-flow:row nowrap;
        background-color:#4d4e53;
    }
    .right-panel-1 {
        flex:1 1 50%;
        height:50px;
        /*background-color:aquamarine;*/
    }
    .right-panel-2 {
        flex:1 1 50%;
        height:50px;
        /*background-color:darkgoldenrod;*/
    }
    .right-panel-3 {
        display:flex;
        flex-flow:row nowrap;
        width:74vw;
        justify-content:flex-end;
        align-items:flex-end;
        padding:5px 25px 5px 25px;
        background-color:#c5cade;
    }
    .right-panel-4 {
        flex:1;
        background:url(<?php echo $GLOBALS['IMAGES'] . 'photos/starry-sky-1.jpg';?>) 0px -100px no-repeat;
        background-size:87vw;
        border-top:solid 2px #4d4e53;
        min-height:4200px;
        padding:0 10px;
        overflow-y:scroll;
    }
/*
    OTHER
*/

    .breadcrumb-container {
        flex:1;
    }
    .breadcrumb-text {
        display:inline-block;
        color:#ABA5B5;
        color:#bac0de;
        color:#e1e4f1;
        font-style:bold;
        font-size:1.2em;
        background-color:#40424d;
        text-align:center;
        padding:3px 5px;
        border-radius:3px;
    }
    a#random-link {
        color:darkorange;
    }
    
</style>