# 第二章 JavaScript数据类型
### 2.1 数据类型的分类
2.1.1 基础数据类型
基础数据类型，也可以叫做简单数据类型或原始数据类型。通常表示某种值，对值进行的比较。

2.1.1 引用数据类型
应用数据类型，也可以叫做复杂数据类型，时间值对形式出现的，一属性和属性值构成，无序列表集合。在内存中占据独立的空间，任何连个独立的对象都不相等。

### 2.2 基本数据类型
2.2.1 数字类型  
Number类型，这种类型使用IEEE745格式来表示整数和浮点数。数字类型包括：整数、浮点数、NaN、Infinity。  
数字范围：最小值5e-324.最大值2的53次方。    
isNaN()方法用来验证该值是否为非数字，非数字返回值为true，数字返回值为false。

        var a=10;
        var b='10';
        console.log('a+b:'+isNaN(a+b)));//flase
        console.log('a-b:'+inNaN(a-b));//flase
        console.log('NaN:'+isNaN(NaN));//true

2.2.2字符串类型  
String类型是由引号括起来的一组16位Unicode字符组成的字符序列。字符串类型通常被用于表示文本数据

       var a='你好';
       var b="你们好";
       var c='你好我叫"Jan"'；

字符串中反斜线有着特殊用途，反斜线后面加一个特殊字符，就变为了转义字符，具备一些特殊用途

2.2.3布尔类型  
Boolean类型，只有两个字面量值，分别是true和false，并且他们区分大小写，小写的是布尔类型的值  
数据类型中有以下数据类型转换后为false：
(1)false
(2)''空字符串
(3)+0和-0
(4)NaN
(5)null
(6)underfined

2.2.4 null
Null类型，是一个对象，函数的参数，表示该函数不是对象，也可以当做空对象用。
    console.log(null+1);
    //null数字类型转换为0

2.2.5 underfined
Underfined类型代表未定义，是变量的初始值，也是函数的默认返回值。undefined是关键字，不是对象。

     console.log(undefined+1);
     //underfined数字类型转换为NaN

### 2.3 检验基础数据类型的方式
typeof运算符吧信息当做“字符串”返回，也就是说返回值都是字符串类型，返回值有几种类型:number,string,undefined,function,null返回的是object，对于对象不能用typeof检测.

      var a=10;//number
      var b='nihao';//string
      var c=true;//boolean
      var d=false;//boolean
      var e=null;//object
      var f=undefined;//undefined
      var g=['1',2];//object
      var h=function(){alert(1)};//function

typeof后面的括号，在有运算的时候一定要使用，否则返回值可能不正确

### 2.4 数据类型转换
2.4.1 强制转换
强制转换主要指使用Number(),String(),Boolean()三个函数，收到将各种类型的指分别转为，数字类型，字符串类型，布尔类型.

Number()转换为数字类型:

         console.log(Number("352"));//352
         console.log(Number("nihao"));//NaN
         console.log(Number(true));//1
         console.log(Number(false));//0
         console.log(Number(''));//0

String()转换为字符串类型:

         console.log(String("352"));//352
         console.log(String(true));//true
         console.log(String(false));//flase

Boolean()转换为布尔类型:

         console.log(Boolean(654));//true
         console.log(Boolean('nihao'));//true
         console.log(Boolean(''));//flase
         console.log(Boolean(0));//flase
         console.log(Boolean(NaN));//flase

2.4.2 parseInt和parseFloat()
parseInt()函数可以将数据转换成数字类型，并取整数部分，浮点数部分不取，如先遇到非数字数据，显示为NaN.

       var a=10.67;//10
       var b='4.644';//4
       var c='12e';//12
       var d='nihao';//NaN
       var e='nihao123';//NaN

parseFloat()函数可以将函数转换为数字类型，去整数和浮点部分

       var a=10.67;//10.67
       var b='4.464';//4.64
       var c='12e';//12

2.4.3自动转换
变量的数据类型不确定，但是各种运算符对数据类型是有要求的，如果运算符发现运算的数据类型与预期的不一样，就会进行自动转换。

      var a=10;
      var b='10';
      var c='nihao';
      console.log(a+b);//1010
      console.log(a-b);//0
      console.log(a-c);//NaN
      console.log(a*b);//100
      console.log(a/b);//1