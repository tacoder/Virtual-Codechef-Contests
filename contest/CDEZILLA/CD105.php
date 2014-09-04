<?php require("../../includes/header.php"); ?><h1>Bulls et Cows</h1><div class="content">

<p>It's the same old, boring day in college. The classes are being bunked either by the students or by the teachers. Ram, a Rebbachisaurus, being already aware of this, brings along some Bulls and Cows with him and decides to play with them, with Raj, a Riojasaurus.  Raj is playing with Bulls and Cows for the 1st time but he still wants to beat Ram. So he decides to cheat, by writing a code to help him win the game. Can you help Raj in this evil deed of his, by writing the code for him?</p>
<p>Following are the details of the game:<br />
It is a two player game in which one of the players chooses a secret code consisting of P ordered pins, each of them having one of the predefined set of C colours. The second player has to guess that secret sequence of colours. Note: Some colours may not appear at all in the code while some colours may appear more than once.</p>
<p>The player starts making guesses, which are formed in the same way as the secret code. After each guess, the 2nd player provides him/her a hint on how successful the guess was. Each hint consists of B bulls and W cows. The bull stands for every pin that was guessed right, i.e. the right colour was put on the right position while the cow means right colour but on the wrong position. For e.g., if the secret code is "white, yellow, blue, red, white" and the guess was "white, red, white, white, blue", the hint would consist of one bull(for the white on the 1st position) and three cows  (for the other white, red and blue colours). The goal is to guess the sequence with the minimal number of hints. </p>
<p>Your goal is to write a program that makes Bulls and Cows guesses.</p>
<h3>Input</h3>
<p>There are multiple test cases in the input. The input begins with a single integer which gives the number of test cases. Each test case describes one game situation and you are to make a guess. On the first line of each test case, there are three integer numbers, P( 1 &lt;= P &lt;= 10), C(1 &lt;= C &lt;= 100)  and M(1 &lt;= M &lt;= 100) where P is the number of pins, C is the number of colours, and M is the number of already played guesses. </p>
<p>Then there are M x 2 lines, two lines for every guess. At the first line of each guess, there are P integer numbers representing colours of the guess where each colour is represented by a number G<sub>i</sub>, 1 &lt;= G<sub>i</sub> &lt;= C. The second line contains two integer numbers, B and W, stating for the number of bulls and cows given by the corresponding hint. </p>
<p>Let's have a secret code A1, A2, ... , AP and the guess B1, B2, ... BP. Then we can make a set H containing pairs of numbers (I,J) such that A<sub>I</sub> = B<sub>J</sub>, and that any number can appear at most once on the first position and at most once on the second position. That means for every two different pairs from that set, (I1,J1) and (I2,J2), we have I1 != I2 and J1 != J2. Then we denote B(H) the number of pairs in the set, that meet the condition I = J, and W(H) the number of pairs with I != J. </p>
<p>We define an ordering of every two possible sets S1 and S2. Let's say S1 &lt;= S2 if and only if one of the following holds:<br />
B(S1) &lt; B(S2), or B(S1) = B(S2) and W(S1) &lt;= W(S2)<br />
Then we can find a maximal set Smax according to this ordering. The numbers B(Smax) and W(Smax) are the bulls and cows for that hint.</p>
<h3>Output</h3>
<p>For every test case, print P numbers representing P colors of the next guess. Your guess must be valid according to all previous guesses and hints. The guess is valid if the sequence could be a secret code i.e. the sequence was not eliminated by previous guesses and hints. </p>
<p>If no valid guess is possible, print You are cheating! . If there are more valid guesses, output the one that is lexicographically smallest. i.e. find such guess G that for every other valid guess V there exists a number I such that G<sub>J</sub> = V<sub>J</sub> for every J<I, and G<sub>I<V<sub>I. </v<sub></i,></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
4 6 2
1 2 1 2
2 0
1 1 2 2
1 1
3 1 1
1 1 1
2 1
6 6 3
1 1 1 1 1 1
2 0
2 2 2 2 2 2
2 0
3 3 3 3 3 3
2 0

<b>Output:</b>
1 2 3 3
You are cheating!
1 1 2 2 3 3

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ajitesh14">ajitesh14</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-04-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>9 sec</td>
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