<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title><?php echo "hi there"; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <style>
      body {
    	text-align: center;
    	/* background-color: #222; */
    	color: #fff;
    	/* margin-top: 50px; */
    	.dropdown-menu {
    		border-radius: 0;
    	}
    	.multiselect-native-select {
    		position: relative;
    		select {
    			border: 0 !important;
    			clip: rect(0 0 0 0) !important;
    			height: 1px !important;
    			margin: -1px -1px -1px -3px !important;
    			overflow: hidden !important;
    			padding: 0 !important;
    			position: absolute !important;
    			width: 1px !important;
    			left: 50%;
    			top: 30px;
    		}
    	}
    	.multiselect-container {
    		position: absolute;
    		list-style-type: none;
    		margin: 0;
    		padding: 0;
    		.input-group {
    			margin: 5px;
    		}
    		li {
    			padding: 0;
    			.multiselect-all {
    				label {
    					font-weight: 700;
    				}
    			}
    			a {
    				padding: 0;
    				label {
    					margin: 0;
    					height: 100%;
    					cursor: pointer;
    					font-weight: 400;
    					padding: 3px 20px 3px 40px;
    					input[type=checkbox] {
    						margin-bottom: 5px;
    					}
    				}
    				label.radio {
    					margin: 0;
    				}
    				label.checkbox {
    					margin: 0;
    				}
    			}
    		}
    		li.multiselect-group {
    			label {
    				margin: 0;
    				padding: 3px 20px 3px 20px;
    				height: 100%;
    				font-weight: 700;
    			}
    		}
    		li.multiselect-group-clickable {
    			label {
    				cursor: pointer;
    			}
    		}
    	}
    	.btn-group {
    		.btn-group {
    				.multiselect.btn {
    					border-top-left-radius: 4px;
    					border-bottom-left-radius: 4px;
    				}
    		}
    	}
    	.form-inline {
    		.multiselect-container {
    			label.checkbox {
    				padding: 3px 20px 3px 40px;
    			}
    			label.radio {
    				padding: 3px 20px 3px 40px;
    			}
    			li {
    				a {
    					label.checkbox {
    						input[type=checkbox] {
    							margin-left: -20px;
    							margin-right: 0;
    						}
    					}
    					label.radio {
    						input[type=radio] {
    							margin-left: -20px;
    							margin-right: 0;
    						}
    					}
    				}
    			}
    		}
    	}
    	.btn {
    		border-radius: 0;
    		padding: 10px 0;
    	}
    	.btn-primary {
    		background-color: #ff0000;
    		border: none;
    		border-radius: 0;
    		padding: 11px 15px;
    		text-transform: uppercase;
    	}
    }

  </style>
</head>
<body>
