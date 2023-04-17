# PHP OOP

### History of programming language**

- Functional
- OOP
- Procedural
- Assembly
- Matchine

### Procedural
การทำงานเชิงกระบวนการ ทำงานแบบ โปรแกรมหลัก และ โปรแกรมย่อย (modules) โดยแต่ละ module จะออกแบบให้ทำได้ 1 งานเท่านั้น
มี variable ทั้งแบบ global และ local โดย ตัวแปร global data สามารถให้โปรแกรมย่อยเรียกใช้ได้ ส่วนใหญ่เราจะเขียนกันแบบนี้
ปัญหาคือ ทำให้การควบคุมและเปลี่ยนแปลงค่าที่ก้อนข้อมูลชุดเดียวกันใน โปรแกรมหลัก ไม่รู้ว่า ฟังชั่นไหนเรียกใช้ หรือเปลี่ยนแปลงค่าข้อมูล
ทำให้เกิดปัญหาได้เพราะทุกฟังก์ชั่นสามารถเรียกใช้ข้อมูลได้เหมือนกันหมด

### OOP

Object oriented programming ภาษาเชิงวัตถุ
แยก data กับ method ไว้ในแต่ละ object และสามารถกำหนดการเข้่าถึงข้อมูลในแต่ละ object ได้ ทำให้มีความปลอดภัยสูง
ลดปัญหาการเปลี่ยนแปลงข้อมูลใน object โดยไม่ได้รับอนุญาต
และในการสื่อสารระหว่าง object จะไม่สามารถเข้าถึง data ได้โดยตรง แต่จะต้องเข้าผ่าน method เท่านั้น
และสามารถนำกลับมาใช้ซ้ำ (reuse) ได้ดีกว่า module

### Procedural VS Object Oriented
- กำหนดขั้นตอนการแก้ปัญหา                    มองปัญหาเป็นวัตถุ
- โปรแกรมและข้อมูลอยู่คนละส่วน                - เอาส่วนโปรแกรมและข้อมูลไว้ด้วยกัน
- ออกแบบจากล่างขึ้นบน                       ออกแบบเป็นวัตถุ
- แก้ไขง่ายเพราะมีอิสระต่อกัน                  การแก้ไขไม่กระทบส่วนอื่นๆ เพราะวัตถุมีความสมบูรณ์ในตัวเอง

### องค์ประกอบพื้นฐาน
#### 1.Class & Object (ต้นแบบและวัตถุ)

ประกอบด้วย 2 ส่วน คือ
- คุณลักษณะ หรือคุณสมบัติ (attribute) / property
- พฤติกรรม (method) / behavior

Class {Animal} -> Object {Tiger, Hippo, Bear}

{Animal} -> Elephant

Attribute: name, color, type, weight, leg

Method: run(), sleep(), makeSound()

Class {Employee} -> Object {Accounting, Programmer, Sale}

#### 2.Method (เมธอด)

#### 3.Encapsulation (การห่อหุ้ม)

#### 4.Inheritance (การสืบทอดคุณสมบัติ)

#### 5.Polymorphism (การพ้องรูป)



