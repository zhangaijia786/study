#第六章 DOM
###6.1 DOM概述
#####6.1.1 DOM的概述   
DOM文档对象模型，DOM对象不仅仅是一个普通的内置对象，它还是一个巨大的API的核心对象，它将文档的内容呈现在JS面前，并赋予了JS操作文档的能力。

#####6.1.2 DOM和JavaScript的关系  
一个web页面是一个文档，则文档可以再浏览器窗口或者作为HTML源代码显示出来，但上述两种情况都是同一个文档,DOM提供了对同一份文档的另一种表现，储存和操作的方式，DOM能够使用JavaScript脚本语言进行修改。

#####6.1.3 DOM节点  
加载html页面，web浏览器生成一个树形结构，用来表示页面的内部结构。DOM将这种结构理解为节点组成，根据w3c的html DOM标准，html文档找那个的所有内容都是节点。
>整个文档是一个文档节点  
>每个html元素是元素节点  
>html元素内的文本是文本节点(空格也是文本节点)  
>每个html属性都是属性节点（如:id,value,class）  
>注释也是节点，叫注释节点

#####6.1.4 DOM树  
DOM树体现着html页面的层级结构，而DOM树有DOM文档树和DOM元素树两种，DOM元素树包含的只有元素节点，而DOM文档树则包括DOM文档中的所有内容。  


###6.2 获取元素
#####6.2.1 getElementById
getElementById()的方法，接受一个参数；获取元素的id，如果找到相应元素，则返回该元素的，否则返回null。

     //用变量接 在文档中 找 元素  用id  'd'
        var d=document.getElementById('d');
        console.log(d);	

#####6.2.2 用标签名获取元素
getElementsByTagName()方法可以获得元素名称下所有的元素，返回一个伪数组，或者说是一个节点数列。

     var lis=document.getElementsByTagName('li');
     //伪数组
     console.log(lis);

在某一个元素中，并不是在全局文档中利用标签获取元素，这样更加精准。

     var ul=document.getElementById('ul');
     var list=ul.getElementsByTagName('li');
     console.log(list);

当元素只有一个的时候,返回的也依然是一个列表,而不是一个元素.可以通过数组的下标找到该元素.

      var div = document.getElementsByTagName('div');
      console.log(div[0]);

#####6.2.3  用类名获取元素

     var a=document.getElementsByName('a');
     console.log(a);

#####6.2.4 用name属性值获取元素
getElementsByName()方法可以获取相同名称的name元素,返回一个伪数组对象.

     <input type="radio" name="sex" value="0">男 
     <input type="radio" name="sex" value="1">女
    
     var sex = document.getElementsByName('sex');
     console.log(sex);

#####6.2.5 用CSS选择器获取元素  
querySelector()和querySelectorAll()可以依靠选择器找到元素,但是前者只能找到元素列表的第一个元素,而后者可以全部找到.注意,该方法性能没有直接利用标签寻找高.

     var ul = document.getElementById('ul')
     var x = document.querySelector('#div>div a');
     var lis = ul.querySelectorAll('li');
     console.log(lis);

###6.3 获取和设置元素中的其他信息
#####6.3.1 获取元素名  
当我们使用id获取元素的时候，元素的名称会和整个元素一起显示出来，如果想要拿到该元素的元素名，也就是标签名则需要用tagName属性。  
tagName属性，该属性只能获取，不能设置。

    var div=document.getElementById('mydiv');
    console.log(div.tagName);//DIV

#####6.3.2 获取元素节点里的内容  
当获取了元素之后，如果我们需要拿到元素中的内容（所有东西），则需要用另一种方法得到。元素里的内容可能包括：文本或元素

    var div=document.getElementById('mydiv');
    console.log(div.innerHTML);

innerHTML属性除了可以获取标签内的内容外，还可以设置标签内的内容。

    var div=document.getElementById('mydiv');
    console.log(div.innerHTML);
    
    div.innerHTML='你好'; 

#####6.3.3 获取元素节点中的文本  
利用innerText属性获取的只能是文本节点，不能是其他，当然innerText属性除了获取，也可以设置元素中的文本。

    var div=document.getElementById('mydiv');
    console.log(div.innerText);
 
    div.innerText="hello";

#####6.3.4 获取元素的类名  
利用className属性获取元素的类名,以字符串的形式返回.同时可以设置新的class类名,需要注意的是,返回值是一个字符串,如果更换其中一个类,则需要考虑该字符串中其他类是否应该一起设置.

    var div=document.getElementById('mydiv');
    console.log(div.className)

#####6.3.5 获取元素样式
style属性可以获取元素内联样式的所有属性，当然如果继续在style中找属性名如：backgroundcolor，就可以得到该属性的值，以字符串的形式返回，同时也可以设置该属性，从而达到增加或更改样式。需要注意的是，以JS形式增加的样式的优先级大于CSS优先级。

    <div style="background-color:blue;"></div>
    <script>
       var div=document.getElementsByTagName('div');
       //js拿到和获取的是内联
       console.log(div[0].style.backgroundColor);
    </script>

##练习
需求1：  
1.随便用一个标签，给他一个id属性，加入内容   
2.获取这个元素的标签名  
3.如果这个元素是加粗的，就把它变成不加粗显示	

    <h1 id="mytag">加油！</h1>
    <script>
       var mytag=document.getElementById('mytag');
       console.log(mytag.tagName);

       //方法一:
       //加粗标签h1-h6,b strong
       //H1||H2||H3||H4||H5||H6
       if(mytag.tagName =='H1'|| mytag.tagName =='H2'|| mytag.tagName =='H3'|| mytag.tagName =='H4'|| mytag.tagName =='H5'|| mytag.tagName =='H6'|| mytag.tagName =='b'|| mytag.tagName =='strong'){
        mytag.style.fontWeight =200;
       }

       //方法二：
       //不管是不是粗体，统一变为细体
       mytag.style.fontWeight =200;

       //方法三：
       var arr=['H1','H2','H3','H4','H5','H6','B','Strong'];
       //condole.log(arr.indexOf('DIV'))
       //检测数组里是否有粗体的标签名，返回-1以外的都是粗体
       var isTrue=arr.indexOf(mytag.tagName);
       console.log(isTrue);
       //判断如是粗体标签名 就改变样式
       if(isTrue!= -1){
           mytag.style.fontWeight=200;
           mytag.style.color='red';
       }

需求2：  
1.在一个列表标签中，插入三个无序内容块  
2.内容分别为：苹果，西瓜，草莓


需求3：  
1.一个200*200的红的方框，一个按钮  
2.点击按钮，让红色方框变成蓝色  
3.必须用className的赋值方法变化

------------

#####6.3.6 获取元素属性
getAttribute()可以获取元素的某个属性，要将属性名称放在括号中记得要用括号括起来。返回值就是字符串形式的属性值。

     var div=document.getElementById('mydiv');
     var a=docment.getElementsByTagName('a');//伪数组

     console.log(div.getAttribute('date-zaj'))
     console.log(a[0].getAttribute('href'))

#####6.3.7 设置元素属性
setAttribute()可以设置元素的某个属性，第一个参数是属性名，第二个参数是属性值，都需要用引号括起来以逗号分隔。

     var div=document.getElementsByTagName('div');
     var a=document.getElementsByTagName('a');

     div[0].setAttribute('id','mydiv');
     a[0].setAttribute('href','http://www.baidu.com');

#####6.3.8 删除元素属性
使用removeAttribute(),可以删除某个元素的某个属性，括号中放入需要删除的属性名，用引号包裹。

       var div=document.getElementById('mydiv');
       div.removeAttribute('id');


###6.4 增加元素
#####6.4.1 创建元素节点
利用JS创建一个元素的方法是，现在文档中创建一个标签document.creatElement()括号中写标签名，当然要用字符串形式，创建之后不是就存在了，而是需要将这个已经创建的元素放到你想放的元素（父级元素）中去。

      //用一个变量承接在文档中‘创建’的一个元素
       var div=document.createElement('div');
      //将已经创建的元素放在想放的位置
       document.body.appendChild(div);

######6.4.2 创建文本节点
利用JS创建元素的文本节点，现在文档中创建文本document.cteateTextNode('一段文字'）在括号中将要创建的字符串放入，最后插入到需要的元素中。

    var p=document.getElementById('p');
    var text=document.createTextNode('一段文字');
    p.appendChild(text);

######6.4.3 css样式赋予
style.cssText是一个css的样式集合，它可以把css层叠样式中的csss样式直接放在该属性后，就不需要一条一条去赋予样式了，可以一次性赋予样式。

      div.style.cssText='width:100px;height:100px;background-color:red;'

######6.4.5 在某元素前插入创建的新元素
insertBefore()这个函数和aooendChild()用法基本一致，都是向父级中插入一个子元素，但区别是insertBefore()是可以选择插入的位置，它需要插入到某一个子元素之前的位置，因此需要那个子元素，insertBefore()有两个参数，第一个参数是需要插入的元素，第二个参数是在谁之前插入，两个参数用逗号分隔。

    <ul id="ul">
        <li id="pg">苹果</li>
        <li id="jz">桔子</li>
        <li>香蕉</li>
    </ul>
    <script>
       var ul=document.getElementById('ul');
       //获取苹果
       var pg=document.getElementById('pg');
       //获取桔子
       var li=document.createElement('li');
       //在父级中插入一个元素（插入元素，在谁前面）
       ul.insertBefore(li,jz);
       var t=document.createTextNode('火龙果');
       li.appendChild(t);
    </script>

###6.5 删除和替换元素
#####6.5.1 元素的替换
元素的替换是在父元素中一个子元素需要被另一个新的子元素所替代，使用replaceChild()方法，该方法有两个参数，第一个参数是将要替换的新元素，第二个是被替换的旧元素，中间用逗号分隔。

    var mydiv=document.getElementById('mydiv');
    var myp=document.createElement('p');
    //在父元素中替换子元素，第一个是新的子元素，第二格是旧的
    document.body.replaceChild(myp,mydiv);

#####6.5.2 元素的删除
元素的删除是在父元素的其中一个子元素需要删除，使用removeChild()方法，将需要删除的元素放在括号中。

    var mydiv=document.getElementById('mydiv');
    document.body.removeChild(mydiv);

###6.6 查找节点 
节点是在DOM树上的每一个节点，其中包括：元素，文本，属性，注释等等。常用的有三个，元素，文本，属性

#####6.6.1 节点的属性

    var mydiv=document.getElementById('mydiv');
    console.log(mydiv.nodeName);//DIV
    console.log(mydiv.nodeValue);//null
    console.log(mydiv.nodeType);//1

#####6.6.2 层次节点
节点可以分为:父节点和子节点，兄弟节点，当我们知道其中之一的时候，可以用一些方法找到另一个。

#####6.6.3 获取所有子节点
使用属性拿到的是该元素下的所有节点，包含所有节点类型，不单单只是元素。

    <ul id="myul">
        <li>111</li>
        <li>222</li>
        <li>333</li>
    </ul>
    <script>
       var myul=document.getElementById('myul');
       //childNodes是所有节点
       console.log(myul.childNodes);
    </script>

#####6.6.4 获取第一个和最后一个子节点
使用firstChild和lastChild可以拿到改父元素下的第一个和最后一个子节点，注意不一定是元素节点

     <ul id="myul"><li>111</li><li>222</li><li>333</li> </ul>
     <script>
        var myul=document.getElementById('myul');
        console.log(myul.firstChild);
        console.log(myul.lastChild);
     </script>

#####6.6.5 获取父节点
使用parentNode属性可以拿到该元素的父节点，注意父节点只有一个。

    <body>
      <ul id="myul"></ul>
       <script>
        var myul=document.getElementById('myul');
        console.log(myul.parentNode);
      </script>
    </body>

#####6.6.6 获取兄弟节点
使用previousSibling和nextSibling可以获得该元素的前一个和后一个兄弟节点，只能获取一个。

    var mydiv=document.getElementById('mydiv');
    console.log(mydiv.previousSibling);
    console.log(mydiv.nextSibling);

###6.7 元素的宽高属性
#####6.7.1 offsetWidth和offsetHeigth
需要获取一个元素的宽度和高度，使用style使无法获取的，所以我们选择使用offsetWidth和offsetHeigth属性。该属性可以获取元素的占位宽高，它也包含了内边距和边框。

    var mydiv=document.getElementById('mydiv');
    console.log(mydiv.style);//这种方法只能拿到内联样式
    console.log(mydiv.offsetWidth);

#####6.7.2 clientWidth和clientHeigth
clientWidth和clientHeigth属性也可以获取元素的宽高，但与offsetWidth不同的是不包含边框。

    console.log(mydiv.clientWidth);

###6.8 子元素和父元素的距离
offsetLeft和offsetTop是距离body左边界和上边界距离，但如果该子元素使用了定位属性，则参照的就不是body而是距离它最近的父级元素。

    <div id="baba">
        <div id="erzi"></div>
    </div>
    <script>
      var erzi=document.getElementById('erzi');
      console.log(erzi.offsetLeft);
      console.log(erzi.offsetTop); 
    </script>