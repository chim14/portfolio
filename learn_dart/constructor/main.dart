import 'employee.dart';

void main(List<String> args) {
  Employee employee1 = Employee(1, "Chim", "Marketing");
  Employee employee2 = Employee(2, "Alice", "Sales");
  Employee employee3 = Employee(3, "Nana", "Engineering");

  print(
      employee1); // Output: Employee(id: 1, name: "John", department: "Marketing")
  print(
      employee2); // Output: Employee(id: 2, name: "Alice", department: "Sales")
  print(
      employee3); // Output: Employee(id: 3, name: "Bob", department: "Engineering")
}
