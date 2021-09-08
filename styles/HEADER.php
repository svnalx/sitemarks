<style>
    /*
        HEADER
    */ 
    header {
        display:flex;
        align-items:flex-end;
        justify-content:flex-start;
        background-color:var(--black);
        margin:0 auto;
        width:100vw;
        height:40px;
        padding:0;
    }    
    header .by-line {
      position:relative;
      top:-6px;
      left:10px;
    }
    a.logo-link {
        display:inline;
        font-family:Lily, Lobster, AlexBrush;
        font-size:1.5em;
        color:#3399FF;
        font-weight:bold;
        text-decoration:none;
        position:relative;
        top:-5px;
        left:-2px;
    }
    .logout-form {
        margin-top:3px;
    }
    .logout-button {
        border:0;
        display: inline-block;
        border-radius:5px;
        color: #e6f2ff;
        text-align: center;
        padding:1px 15px;
        margin-bottom:1px;
        background-color: #4d4e53;
        text-decoration: none;
        font-size:1em;
        font-family:Candara, Arial, sans-serif;
        font-weight: bold;
        cursor:pointer;
    }
    .logout-button:hover {
        background-color:#5c00e6;
    }
    .page-container {
        height:100vh;
        display:flex;
        flex-flow:row wrap;
        justify-content:space-around;
    }
    .main {
        display:flex;
        flex-flow:row nowrap;
        -webkit-align-self: flex-start;
        -webkit-justify-content: flex-start;
        -webkit-justify-content: flex-start;
        -webkit-align-items: flex-start;
        flex:0 0 100vw;
        background-color:#4d4e53;
        width:100vw;
        height: calc(100vh - 90px);
        border-top:5px solid #4d4e53;
    }  
</style> 