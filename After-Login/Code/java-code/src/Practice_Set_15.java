import java.time.LocalDate;
import java.time.LocalTime;
import java.time.format.DateTimeFormatter;
import java.util.*;

public class Practice_Set_15 {
    public static void main(String[] args) {
        // Q1
        ArrayList<String> stud_List = new ArrayList<>(10);
        stud_List.add("Avinash");
        stud_List.add("Vishal");
        stud_List.add("Mayur");
        stud_List.add("Omkar");
        stud_List.add("Pooja");
        stud_List.add("Omkar");
        stud_List.add("Nakul");
        stud_List.add("Prasad");
        stud_List.add("Shailesh");
        stud_List.add("Sagar");
        for(String names:stud_List){
            System.out.print(names + ", ");
        }



        // Q2
        Date d = new Date();
        System.out.println(d);
        System.out.println(d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds()); // Deprecated methods

        // Q3
        Calendar c = Calendar.getInstance();
        System.out.println(c.get(Calendar.HOUR_OF_DAY) + ":" + c.get(Calendar.MINUTE) + ":" + c.get(Calendar.SECOND));

        // Q4
        LocalTime lt = LocalTime.now();
        DateTimeFormatter dft = DateTimeFormatter.ofPattern("H:m:s");
        System.out.println(lt.format(dft));
        // Q5
        HashSet<Integer> list = new HashSet<>(3,0.67f);
        list.add(6);
        list.add(43);
        list.add(29);
        list.add(18);
        list.add(96);
        list.add(6);
        System.out.println(list);

    }
}
