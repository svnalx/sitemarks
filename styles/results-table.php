<style>
    /*
        RESULTS TABLE
    */
    #results {
        box-sizing:border-box;
        font-size:0.9em;
        table-layout:fixed;
        border-collapse:separate;
        border-spacing:0px 1px;
        border-bottom:3px solid #4d4e53;
        border-left:1px solid #4d4e53;
        border-right:3px solid #4d4e53;
        width:73vw;
        margin:15px auto;
        overflow-y:scroll;
    }
    #results td {
        font-size:0.92em;
    }
    #results tr, th, td {
        height:0px;
        margin:0px;
        padding:0 0 0 5px;
        overflow:hidden;
        white-space:nowrap;
        text-overflow:ellipsis;
        border-right:0px solid #ABA5B5;
    }
    #results th {
        background-color:var(--secondary-color);
        color:#F7FBFF;
        transition:.25s ease;
        height:20px;
    }
    #results th.show-row {
        width:14px;
        padding:0 1px;
        margin:0;
    }
    #results th.group {
        width:70px;
        padding:0 5px;
    }
    #results th.starred {
        width:10px;
        padding:0 auto;
    }
    #results th.title {
        width:215px;
    }
    #results th.title:hover {
        width:215px;
    }
    #results th.summary {
        width:120px;
    }
    #results th.summary:hover {
        width:120px;
    }
    #results th.notes {
        width:100px;
    }
    #results th.notes:hover {
        width:100px;
    }  
    #results th.date {
        width:40px;
    }
    #results td.add-group-line {
        padding:5px 0px 5px 50px;
        background-color:#FFD3A3;
    }
    td.align-left {
        text-align:left;
    }
    #results th.modify {
        width:32px;
        padding:0px;
        text-align:center;
    }
    button[type="send"] {
        cursor:pointer;
        background:none; 
        border:0;
        height:20px;
        width:20px;
        margin:0;
        padding:0;
    }
    button.button-row-expand {
        padding:1px 4px;
        margin:0;
        border:0;
        background:none;
        cursor:pointer;
    }
    #results tr:nth-child(even) {
        background-color:#E6F2FF;
        background-color:rgba(230, 242, 255, 0.85);
        background-color:var(--primary-color-lighter);
    }
    #results tr:nth-child(odd) {
        background-color:#CCE4FF;
        background-color:rgba(204, 228, 255, 0.85);
        background-color:var(--primary-color-lightest);
    }
    #results td:nth-child(8n + 1) {
        background-color:#E6F2FF;
        background-color:rgba(0, 0, 0, 0.1);
    }
    #results td:nth-child(8n + 7) {
        background-color:#E6F2FF;
        background-color:rgba(0, 0, 0, 0.1);
    }
    #results td:nth-child(8n + 8) {
        background-color:#E6F2FF;
        background-color:rgba(0, 0, 0, 0.1);
    }
    #results tr:hover {
        background-color:#b3b3ff;
        background-color:var(--primary-color);
    }
    #results td:hover {
        white-space:normal;
        text-overflow:clip;
    }
    a.webmark-title {
        color:#003ce6;
        color:#40424d;
        color:#e6f2ff;
        color:#40424d;
        font-size:1.1em;
        text-decoration:none;
        display:block;
        font-family:"Open Sans Light", Candara, Arial, sans-serif;
        padding:2px 4px;
    }
    a.webmark-title:hover {
        color:#5c00e6;
        color:var(--black);
        transition-duration:0.25s;
        font-weight:bold;
        padding-left:5px;
    }
    /* 
        GROUP DISPLAY AND CUSTOM COLORS 
    */    
    span.groupDisplay {
        font-size:0.95em;
        font-weight:500;
        color:#F2F8FF;
        background-color:#4d4e53;
        border:0px solid #95969C;
        border-radius:25px;
        padding:0 10px;
        opacity:1;
    }
    span.monies {
        background-color:darkgreen;
        color:chartreuse;
    }
    span.medical {
        background-color:firebrick;
        color:lightgoldenrodyellow;
    }
    span.alex {
        background-color:dodgerblue;
        color:#F2F8FF;
    }
    span.desteni {
        background-color:lightgoldenrodyellow;
        color:rebeccapurple;
    }
    span.webdev {
        background-color:aquamarine;
        color:rebeccapurple;
    }   
    .r-border {
        border-right:1px solid #4d4e53;
    }
    }
</style> 