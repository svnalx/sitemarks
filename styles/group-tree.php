<style>
    .scroll-container {
        background-color:#e1e4f1;
        border-top:1px solid #3399FF;
        border-bottom:1px solid #A676ED;
        min-height:150px;
        height:450px;
        width:260px;
        overflow-y:scroll;
        overflow-x:auto;
        margin:0 auto;
        padding:5px;
    }
    .group-tree {
        height:450px;
    }
/*
    GROUP TREE
*/
    .group-tree-header-container {
        display:flex;
        padding:7px 3px 0 3px;
        margin-bottom:8px;
    }
    .groups-heading {
        flex:1;
        color:#e6f2ff;
        margin-top:-5px;
    }
    .gt-create-group-form {
        flex:3;
    }
    .gt-create-group-name {
        border-radius:3px;
        background-color:#F7FBFF;
        border:1px solid #ABA5B5;
        width:145px;
        height:18px;
        margin:0 5px 7px 0;
        float:right;
    }
    .gt-create-group-button {
        background-color:#D1D1E0;
        border:1px solid #ABA5B5;
        border-radius:3px;
        padding:0 3px;
        height:18px;
        float:right;
        font-size:0.9em;
    }
    
    
    .folder-icon {
        height:10px;
        width:10px;
    }
    
    ol.tree
    {
        display:inline-block;
        display:none;
        background-color:#f7fbff;
        background-color:cornsilk;
        padding: 0 0 0 30px;
        width:260px;
        height:400px;
    }
    li a {
        color:darkblue;
    }
/*
    CSS Tree menu styles 
*/
    ol.gt-ol {
        display:inline-block;
        padding: 0 0 0 0px;
        width:275px;
        height:auto;
        margin:15px 0 0 -35px;
    }
    label.toggle {
        font-size:0.7em;
        background-color:#ABA5B5;
        background-color:#b8cddf;
        border-right:2px solid #485d75;
        border-bottom:3px solid #485d75;
        color:#485d75;
        padding:2px 4px;
        font-weight:900;
        position:relative;
        top:5px;
        left:2px;
    }
    input#toggle-all {
        position: absolute;
		left: 0;
		margin-left: 0;
		opacity: 0;
        opacity: 0;
		z-index: 2;
		cursor: pointer;
		height: 1em;
		width: 1em;
		top: 0;
    }
    label > a {
        display:inline-block;
        width:100%;
        color:#485d75;
        font-family:"BrowalliaUPC";
        font-size:16px;
        line-height:12px;
    }
    label > a:hover {
        background-color:#b8cddf;
        color:#485d75;
    }
	li 
	{ 
		position: relative; 
		margin-left: -15px;
        margin-left:18px;
		list-style: none;
	}
    .active-group 
    {
        color:#f7fbff;
        background-color:#1884df;
        font-weight:300;
    }
	li input
	{
		position: absolute;
		left: 0;
		margin-left: 0;
		opacity: 0;
        opacity: 0;
		z-index: 2;
		cursor: pointer;
		height: 1em;
		width: 1em;
		top: 0;
	}
        li input + ol
		{
			background: url(http://allasone.life/webmarks/images/toggle-small-expand.png) 42px 0 no-repeat;
			margin: -0.938em 0 0 -44px; /* 15px */
			height: 1em;
		}
        li input + ol.end-of-line {
            background-image:none;
            margin: -0.938em 0 0 -44px; /* 15px */
            height: 1em;
        }
		li input + ol > li { display: none; margin-left: -14px !important; padding-left: 1px; }
	li label
	{
		background: url(http://allasone.life/webmarks/images/icon-folder4.png) 15px 1px no-repeat;
		cursor: pointer;
		display: block;
		padding-left: 37px;
	}
    
    li label.end-of-line {
        background: none;
        padding-left:21px;
    }
    
    

	li input:checked + ol
	{
		background: url(http://allasone.life/webmarks/images/toggle-small.png) 42px 5px no-repeat;
		margin: -1.4em 0 0 -44px; /* 20px */
		padding: 1.563em 0 0 61px;
		height: auto;
	}
		li input:checked + ol > li { display: block; margin: 0 0 0.125em;  /* 2px */}
		li input:checked + ol > li:last-child { margin: 0 0 0.063em; /* 1px */ }
    
    li input:not(:checked) + ol {
    }
    
</style>