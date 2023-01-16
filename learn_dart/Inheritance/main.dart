import 'armor_titan.dart';
import 'attack_titan.dart';
import 'beast_titan.dart';
import 'human.dart';

void main(List<String> args) {
  ArmorTitan armorTitan = ArmorTitan();
  armorTitan.powerPoint = 3;
  print(armorTitan.powerPoint); // Output: 3

  AttackTitan attackTitan = AttackTitan();
  attackTitan.powerPoint = 7;
  print(attackTitan.powerPoint); // Output: 7

  BeastTitan beastTitan = BeastTitan();
  beastTitan.powerPoint = 4;
  print(beastTitan.powerPoint); // Output: 4

  Human human = Human();
  human.powerPoint = 8;
  print(human.powerPoint); // Output: 8

  // Cetak object yang ada pada child class
  print(armorTitan.terjang()); // Output: "dush.. dush.."
  print(attackTitan.punch()); // Output: "blam.. blam.."
  print(beastTitan.lempar()); // Output: "wush wush.."
  print(human.killAllTitan()); // Output: "Sasageyo...Shinzo Sasageyo..."
}
