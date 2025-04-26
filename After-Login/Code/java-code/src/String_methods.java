public class String_methods{
    public static void main(String[] args) {
        String name = "Avinash";
        // fun 1;
        System.out.println(name.length());

        // fun 2;
        System.out.println(name.toLowerCase());

        // fun 3;
        System.out.println(name.toUpperCase());

        // fun 4;
        String My_Name = "     Avi     ";
        System.out.println(My_Name);
        System.out.println(My_Name.trim());

        // fun 5;
        System.out.println(name.replace('A','c'));
        System.out.println(name.replace("Avi","vai"));
        System.out.println(name.replace("h","Avi"));

        // fun 6;
        System.out.println(name.startsWith("Avi"));
        System.out.println(name.startsWith("avi"));

        // fun 7;
        System.out.println(name.endsWith("sh"));
        System.out.println(name.endsWith("hs"));

        // fun 8;
        String my_Name_Is = "Avinanashnash";
        System.out.println(my_Name_Is.indexOf('A'));
        System.out.println(my_Name_Is.indexOf("nash",6));

        // fun 9;
        System.out.println(my_Name_Is.lastIndexOf("nash"));
        System.out.println(my_Name_Is.lastIndexOf("nash",8));

        // fun 10;
        System.out.println(name.charAt(6));
        System.out.println(name.charAt(3));
        System.out.println(name.charAt(0));

        // fun 11;
        System.out.println(name.substring(2));
        System.out.println(name.substring(0));

        // fun 12;
        // System.out.println(int,int);
        System.out.println(name.substring(1,4));

        // fun 13;
        System.out.println(name.equals("Avinash"));
        System.out.println(name.equals("avinash"));
        System.out.println(name.equals("Avinas"));

        // fun 14;
        System.out.println(name.equalsIgnoreCase("acvinash"));
        System.out.println(name.equalsIgnoreCase("avinash"));

        // Escape characters

        // Double quote
        System.out.println("Hello my name is \"Avinash\"");

        // Tab --> "\t"
        System.out.println("Hello my name is \t Avinash");

        //


    }
}