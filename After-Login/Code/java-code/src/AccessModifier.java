class MyEmployee{
    private int id;
    private String Name;
    public void setId(int i){
        id = i;
    }
    public int getId(){
        return id;
    }
    public void setName(String n){
        Name = n;
    }
    public String getName(){
        return Name;
    }
}
public class AccessModifier {
    public static void main(String[] args) {
        MyEmployee emp1 = new MyEmployee();
//        emp1.id = 101;
//        emp1.Name = "Avinash";
        emp1.setId(101);
        System.out.println(emp1.getId());
        emp1.setName("Avinash");
        System.out.println(emp1.getName());
    }
}
