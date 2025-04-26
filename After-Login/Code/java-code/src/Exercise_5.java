// package com.avinash.shape;
class Cylinder3
{
    int radius;
    int height;
    void getter(int r, int h)
    {
        radius = r;
        height = h;
    }
    double volume()
    {
        return Math.PI * this.radius * this.radius * this.height;
    }
    double surface_Area()
    {
        return (2 * Math.PI * this.radius * this.height) + (2 * Math.PI * this.radius * this.radius);
    }
}
class Circle2 extends Cylinder3
{
    double perimeter()
    {
        return 2 * Math.PI * radius;
    }
    double surface_Area()
    {
        return Math.PI * radius * radius;
    }
}
class Sphere1 extends Cylinder3
{
    double surface_Area()
    {
        return 4 * Math.PI * radius * radius;
    }

    double volume()
    {
        return (4/3) * Math.PI * radius * radius;
    }
}

class Rectangle3 extends Cylinder3
{
    int base;
    Rectangle3(int base)
    {
        this.base = base;
    }
    double surface_Area()
    {
        return (this.base * height);
    }
    double perimeter()
    {
        return 2 * (height + this.base);
    }
}

class Square2 extends Cylinder3
{
    double surface_Area()
    {
        return radius * height;
    }
    double perimeter()
    {
        return 4 * height;
    }
}
class Excercise5
{
    public static void main(String args[])
    {
        Cylinder3 c1 = new Cylinder3();
        c1.getter(3,7);
        System.out.println("Volume of Cylinder    : " + c1.volume());
        System.out.println("Area of Cylinder      : " + c1.surface_Area());

        Circle2 c2 = new Circle2();
        System.out.println("Perimeter of Circle   : " + c2.perimeter());
        System.out.println("Area of Circle        : " + c2.surface_Area());

        Sphere1 s1 = new Sphere1();
        System.out.println("Area of Sphere        : " + s1.surface_Area());
        System.out.println("Volume of Sphere      : " + s1.volume());

        Rectangle3 r1 = new Rectangle3(5);
        System.out.println("Area of Rectangle     : " + r1.surface_Area());
        System.out.println("Perimeter of Rectangle: " + r1.perimeter());

        Square2 s2 = new Square2();
        System.out.println("Area of Square        : " + s2.surface_Area());
        System.out.println("perimeter of Square   : " + s2.perimeter());
    }
}

