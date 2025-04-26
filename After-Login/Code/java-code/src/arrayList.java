import java.util.ArrayList;
public class arrayList {
    public static void main(String[] args) {
        ArrayList<Integer> a1 = new ArrayList<>();
        ArrayList<Integer> a2 = new ArrayList<>(5);
        a2.add(23);
        a2.add(63);
        a2.add(35);

        a1.add(6);
        a1.add(7);
        a1.add(0,6);
        a1.add(0,1);
        a1.addAll(a2);
        // a2.clear();
        // System.out.println(a1.contains(35));
        // System.out.println(a1.indexOf(6));
        // System.out.println(a1.lastIndexOf(6));
        // System.out.println( a2.isEmpty());
        // System.out.println(a1.hashCode());
        // a1.set(6,78);
        // a1.remove(0);
        // a1.ensureCapacity(5);
        // a1.trimToSize();
        System.out.println( a1.equals(a2));

        for (Integer integer : a1) {
            System.out.print(integer + ", ");
        }
    }
}
