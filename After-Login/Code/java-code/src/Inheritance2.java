class Animal{
    int legs;
    public int getLegs() {
        System.out.println("I'm in Animal class");
        return legs;
    }
    public void setLegs(int legs) {
        this.legs = legs;
    }
}
class Dog extends Animal{
    String type;
    String sound;
    public String getType() {
        return type;
    }
    public void setType(String type) {
        this.type = type;
    }
    public String getSound() {
        return sound;
    }
    public void setSound(String sound) {
        this.sound = sound;
    }
}
class Cat extends Animal{
    String sound;
    public String getSound() {
        return sound;
    }
    public void setSound(String sound) {
        this.sound = sound;
    }
}
public class Inheritance2 {
    public static void main(String[] args) {
        // Creating object of Animal class
        Animal a = new Animal();
        a.setLegs(4);
        System.out.println(a.getLegs());

        // Creating object of Dog class
        Dog d = new Dog();
        d.setLegs(4);
        System.out.println("Dog had " + d.getLegs() + " legs");
        d.setType("omnivorous");
        System.out.println("Dogs are " + d.getType());
        d.setSound("Bhau bhau bhau ... ...");
        System.out.println("The dogs sound is " + d.getSound());

        // Creating object of Cat class
        Cat c = new Cat();
        c.setLegs(4);
        System.out.println("A Cat has " + c.getLegs() + " legs");
        c.setSound("meow meow meow ... ...");
        System.out.println("A Cat makes " + c.getSound() + " sound");
    }
}
