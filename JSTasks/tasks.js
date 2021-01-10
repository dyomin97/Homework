//Урок 5-6 
//Задача 1
let arr = [];

for(let i = 0; i <10; i++){
    arr[i] = Math.floor(Math.random() * 100);
}

document.write(arr);

document.write("<hr />");

//Задача 2

let arr2 = [50,45,40,35,30];

let result = arr2.reduce((a,b)=>{
    return a+b;
})

document.write(result);

document.write("<hr/>");

//Задача 3

let arr3 = [50, 66, 32, 98,74,33,12];

for(let i = 0; i < arr3.length; i++){
    document.write(arr3[i] + ' ');
}

document.write("<br/>");

for(let i = arr3.length -1; i>=0; i--){
document.write(arr3[i] + ' ');
}

document.write("<hr/>");

//Задача 4

let even = true;

let arr4 = new Map([
    ['city','Orenburg'],
    ['country','Russia'],
    ['language','Russian'],
    ['age','23']
]);

for(let pairs of arr4.entries()){
    if(even) document.write('Key = ' + pairs[0] + ' ' + 'Value = ' + pairs[1] + '<br/>');
    even = !even;
}

document.write('<hr />');

//Задача 5

let arr5 = new Map([
    ['colors', ['green','blue','orange']],
    ['languages', ['Russian','English','German']],
    ['countries',['England', 'Germany', 'Russia']]
]);

let arr6 = Array.from(arr5);
arr6.reverse();

let newMap = new Map(arr6);
for(let pairs of newMap.entries()){
    document.write('Reversed map' + '<br />');
   document.write('Key = ' + pairs[0] + ' ' + 'Value = ' + pairs[1] + '<br/>');
   
}

document.write('<hr/>');

let arr7 = ['images/1.jpg','images/2.jpg','images/3.jpg','images/4.jpg','images/5.jpg'];

document.write("<img src='"+arr7[Math.floor(Math.random() * 5)] + "' width = 300 height = 300>");

document.write('<hr/>');

//Урок 7-8

//Задача 1
let fact = 'fact';
fact = fact[0].toUpperCase() + fact.substr(1);
document.write(fact);

document.write('<hr />');

//Задача 2

let myName = 'Дёмин Евгений Сергеевич';

document.write(myName.substr(0, myName.lastIndexOf(" ")));

document.write('<hr/>');

//Задача 3

let helloString = "Привет, мир!";

let count = 0;

for(let i = 0; i < helloString.length;i++){
    if(helloString[i] == 'и') count++;
}

document.write(count);

document.write('<hr/>');

//Задача 4

let someString = "html css php";
let arrWithSomeString = someString.split(" ");

document.write(arrWithSomeString);

document.write('<hr/>');
