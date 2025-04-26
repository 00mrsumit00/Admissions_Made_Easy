import java.util.Date;

public class Date_And_Time {
    public static void main(String[] args) {
        System.out.println("Total milliseconds passed since 1 Jan 1970 : " + System.currentTimeMillis());
        System.out.println("Total seconds passed since 1 Jan 1970      : " + System.currentTimeMillis()/1000);
        System.out.println("Total minutes passed since 1 Jan 1970      : " + System.currentTimeMillis()/1000/60);
        System.out.println("Total hours passed since 1 Jan 1970        : " + System.currentTimeMillis()/1000/60/60);
        System.out.println("Total days passed since 1 Jan 1970         : " + System.currentTimeMillis()/1000/60/60/24);
        System.out.println("Total years passed since 1 Jan 1970        : " + System.currentTimeMillis()/1000/60/60/24/365);
        System.out.println("___________________________________________________________");
        Date d = new Date();
        System.out.println(d);
        System.out.println(d.getTime());

        // Following methods are deprecated
//        System.out.println(d.getDate());
//        System.out.println(d.getHours());
//        System.out.println(d.getMinutes());
//        System.out.println(d.getSeconds());
    }
}
