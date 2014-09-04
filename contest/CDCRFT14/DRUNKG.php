<?php require("../../includes/header.php"); ?><h1>Drunk Game</h1><div class="content">
<p>  Alice and Bob were getting bored and decided to play a game. The game involves<br />
  a pile of coins. Both players take turns in picking a certain number of coins<br />
  from the pile. Initially, the pile contains <b>N</b> coins. Alice makes the first<br />
  move. The player who is unable to pick up any coins in his/her turn loses the<br />
  game. Some of the details of the game are:</p>
<p></p>
<ol>
<li>In each turn a player can only decide on picking up <b>1, 4, 9, 16</b> coins from the<br />
  pile.</li>
<p></p>
<li>As both the players are drunk and not in complete control of their actions,<br />
  even if they decide on picking up some coins, they might end up picking<br />
  something else completely. So, if a person decides on picking up <b>X</b> coins from<br />
  the pile, he/she might end up with <b>(X - 1), X or (X + 1)</b> coins with the<br />
  relative probability of<b> C1: C2: C3</b></li>
<p></p>
<li>In each turn a player has to eventually pick up at least <b>1</b> coin.</li>
</ol>
<p></p>
<p>Note that a player cannot decide on picking up <b>X</b> coins from the pile if the<br />
  pile contains less than <b>X</b> coins at the time. Also, if a player decided on<br />
  picking up <b>X</b> coins and it happens that picking up <b>(X + 1)</b> is not valid (This<br />
  might happen if there are only <b>X</b> coins in the pile), then the relative<br />
  probability distribution for the valid moves will be <b>C1: C2</b>. Similarly, if<br />
  picking up <b>(X - 1)</b> coins is not valid, then the relative probability<br />
  distribution for the valid moves will be <b>C2: C3</b>.</p>
<p>  As both of them are not in their right minds, they sometimes want to win and<br />
  sometimes want to lose. But Bob still wonders what is his probability of<br />
  winning/losing the game (depending on what he wants for a particular game).<br />
  Help him find out his probability!
  </p>
<h3>Input Format:</h3>
<p>
  The first line of the input contains a single integer, <b>T</b>, which represents the<br />
  number of test cases. Each test case contains <b>3</b> lines. The first line of each<br />
  test contains a single integer, <b>N</b>, which represents the number of coins in the<br />
  pile initially. The second line contains 3 integers <b>C1, C2 and C3</b>. The last<br />
  line of each test contains <b>2</b> integers describing the mood of Alice and Bob<br />
  respectively. <b>0</b> is for losing and <b>1</b> is for winning.
  </p>
<h3>Output Format:</h3>
<p>
  For each test cases, the probability of winning/losing (depending on the test<br />
  case) rounded to <b>4</b> places of precision.
  </p>
<h3>Constraints:</h3>
<p><b><br />
  1 ≤ T ≤ 10<br />
  1 ≤ N ≤ 1000000<br />
  1 ≤  (C1,C2,C3) ≤  100000<br /></b>
  </p>
<h3>Sample Input:</h3>
<pre>
2
1
1 2 3
0 0
5
1 2 3
0 1</pre><h3>Sample Output:</h3>
<pre>
1.0000
0.4333</pre><p><br />
<b>Problem Setter: Sukhjashan Singh</b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/darkshadows">darkshadows</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-01-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>