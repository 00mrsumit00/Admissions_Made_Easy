import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.LocalTime;
import java.time.format.DateTimeFormatter;
import java.util.Calendar;
import java.util.Date;
import java.util.GregorianCalendar;

public class Date_And_Time_Revision {
    public static void main(String[] args) {
        // Date and Time
        System.out.println(System.currentTimeMillis());
        System.out.println("--------------------------------");
        // Date class
        Date d = new Date();
        System.out.println(d);
        System.out.println(d.getTime());
        System.out.println("--------------------------------");
        // Calendar class
        Calendar c = Calendar.getInstance();
        System.out.println(c.getCalendarType());
        System.out.println(c.getTime());
        System.out.println(c.getTimeZone());
        System.out.println(c.getTimeZone().getID());
        System.out.println("--------------------------------");
        // Gregorian calendar class
        GregorianCalendar g = new GregorianCalendar();
        System.out.println(g.getTime());
        System.out.println((g.get(Calendar.DATE)) + "-" + g.get(Calendar.MONTH) + "-" + + g.get(Calendar.YEAR));
        System.out.println(g.get(Calendar.HOUR) + ":" +g.get(Calendar.MINUTE) + ":" + g.get(Calendar.SECOND));
        System.out.println("--------------------------------");
        // Java Date and Time API
        LocalDate ld = LocalDate.now();
        System.out.println(ld);
        LocalTime lt = LocalTime.now();
        System.out.println(lt);
        LocalDateTime ldt = LocalDateTime.now();
        System.out.println(ldt);
        System.out.println("--------------------------------------");
        // Date and time formatter
        // DateTimeFormatter dtf = DateTimeFormatter.ISO_LOCAL_DATE;
        LocalDateTime dt = LocalDateTime.now();
        DateTimeFormatter dtf = DateTimeFormatter.ofPattern("dd/MM/yyyy E\nH:m a");
        String date = dt.format(dtf);
        System.out.println(date);

    }
}