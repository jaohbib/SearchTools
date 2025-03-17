# SearchTools
The SearchTools module enables easy integration of external components and services into the existing look and feel of Vufind without the need to develop a custom Laminas module. 
The integration of the content is done via .phtml files in the theme. 
The .phtml file to be displayed can be selected via a GET parameter. 
The mapping of the parameter values to a specific .phtml file is done in the theme under `searchtools/home.phtml`.


## Usage
Integrate the module in the `modules` directory of VuFind and activate it by adding `SearchTools` to `VUFIND_LOCAL_MODULES`.  
When adding the module manually make sure to copy/symlink the theme.
