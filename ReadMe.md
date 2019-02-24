# Prototype Design Pattern

The Prototype pattern is a creational design pattern that allows creating new objects by copying an existing object, known as a prototype. This pattern promotes object reuse, simplifies object initialization, and provides flexibility in creating new objects at runtime.

## Key Advantages of Using the Prototype Design Pattern:

### Reduced Object Creation Overhead
The Prototype pattern allows you to create new objects by copying existing objects. This eliminates the need to create objects from scratch every time, reducing the overhead of object creation, especially when the cost of creating an object is high.

### Simplified Object Initialization
With Prototype, you can create new objects by cloning existing ones and then modifying the cloned objects as needed. This simplifies object initialization, especially when objects share common properties or configurations.

### Flexibility and Extensibility
Prototype pattern promotes flexibility by allowing you to create new objects dynamically at runtime. You can easily introduce new types of objects by extending existing prototypes, without modifying the client code that uses these objects.

### Encapsulation of Object Creation
Prototype pattern encapsulates the object creation process within the prototype objects themselves, rather than exposing it to the client code. This improves code maintainability and reduces coupling between the client and the object creation logic.

### Performance Optimization
By avoiding costly object creation operations, Prototype pattern can lead to improved performance, especially in scenarios where object creation is a performance bottleneck.
# الگوی طراحی Prototype

الگوی Prototype یک الگوی طراحی ساختاری است که امکان ایجاد اشیاء جدید را با کپی کردن یک شیء موجود، که به عنوان یک Prototype شناخته می‌شود، فراهم می‌کند. این الگوی الگوی Prototype اشیاء را دوباره استفاده می‌کند، مقدمات ایجاد اشیاء را ساده‌تر می‌کند و امکان ایجاد اشیاء جدید در زمان اجرا را فراهم می‌کند.

## مزایای کلیدی استفاده از الگوی طراحی Prototype:

### کاهش هزینه ایجاد اشیاء
الگوی Prototype به شما امکان ایجاد اشیاء جدید را با کپی کردن اشیاء موجود می‌دهد. این باعث حذف نیاز به ایجاد اشیاء از ابتدا در هر بار، و کاهش هزینه ایجاد اشیاء می‌شود، به خصوص وقتی که هزینه ایجاد یک شیء بالا است.

### سادگی در اولیه‌سازی اشیاء
با استفاده از Prototype، می‌توانید اشیاء جدید را با کپی کردن اشیاء موجود ایجاد کنید و سپس اشیاء کپی شده را به عنوان نیاز تغییر دهید. این کار مقدمات ایجاد اشیاء را ساده می‌کند، به خصوص زمانی که اشیاء ویژگی‌ها یا تنظیمات مشترکی را به اشتراک می‌گذارند.

### انعطاف پذیری و قابلیت توسعه
الگوی Prototype انعطاف پذیری را با امکان ایجاد اشیاء جدید به صورت پویا در زمان اجرا ترویج می‌دهد. شما می‌توانید با توسعه Prototype‌های موجود، به راحتی انواع جدیدی از اشیاء را معرفی کنید، بدون این که کد مشتری که از این اشیاء استفاده می‌کند، را تغییر دهید.

### کپسوله‌سازی ایجاد اشیاء
الگوی Prototype فرآیند ایجاد اشیاء را درون خود اشیاء Prototype محکم می‌کند، به جای این که این فرآیند را به کد مشتری ارائه دهد. این اقدام باعث بهبود قابلیت نگهداری کد و کاهش وابستگی بین مشتری و منطق ایجاد اشیاء می‌شود.

### بهینه‌سازی عملکرد
با جلوگیری از عملیات هزینه‌بر ایجاد اشیاء، الگوی Prototype می‌تواند منجر به بهبود عملکرد شود، به ویژه در حالت‌هایی که ایجاد اشیاء منجر به کاهش عملکرد است.



## How to Use

### English:

1. First, install Docker on your system ([Docker](https://www.docker.com/))
2. Clone the project
3. Enter the project folder in your terminal and enter the following command:
    ```
    Docker-compose up -d
    ```
4. You can see the result of queries in your browser

### Persian:

نحوه استفاده :
-	ابتدا داکر را روی سیستم خود نصب کنید ( https://www.docker.com/)
-	پروژه را کلون کنید
-	در ترمینال خود وارد پوشه پروژه شوید و دستور زیر را وارد کنید:
     ```
     Docker-compose up -d
     ```
-	با اجرای برنامه نمونه های کوئری های ساخته شده را میتوانید چک کنید