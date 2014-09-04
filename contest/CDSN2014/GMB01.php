<?php require("../../includes/header.php"); ?><h1>Jumping Monkeys</h1><div class="content">
<p> </p>
<p>All of us must have played the game of jumping monkeys in our childhood. It was a simple game where one had to put a monkey on a tree using a catapult. The catapult threw the monkey into a specific height in the air such that it may landed on an artificial tree.<br /><br />
This summer one of your cousin visited you during your vacation, with a newer version of the game. This time instead of a single tree the monkey had to be taken up gradually along different levels. The height of these levels could be adjusted manually. The one to take the monkey up first would win the game. One day while playing your mischievous cousin set the height of one of the platform higher than the height to which the catapult could actually throw the monkey. You were unaware of this fact and started playing the game but could never complete it as you got stuck on that level.<br /><br />
The next day your cousin left for his place. You were still embarrassed by you stupid defeat and thus you decided to make a program that would tell you in advance if there was even the possibility of you completing the game or not.
</p>
<p> </p>
<h3>Input</h3>

<ul>
<li>The first line of input would contain the number of test cases.<b>T</b></li>
<li>The next line would contain the height to which the catapult could throw the monkey(H) and the number of platform present in that case(N).</li>
<li>This would then be followed by the height of various platforms, all separated by single space. The height of all the platforms would be randomly arranged.</li>
<p><br /><br />
Assume that you are always at height zero (0) in the beginning.
</p></ul>
<p> </p>
<h3>Output</h3>
<p>For each of the test case you have to tell if it would be possible for you to complete the game or not. If possible give output as ‘Yes’ and otherwise give ‘No’.</p>
<p> </p>
<h3>Constraints</h3>

<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>H,N</b> ≤ <b>10000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 7
10 12 15 4 7 1 3
4 9
12 15 2 14 21 18 4 25 7

<b>Output:</b>
Yes
No
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gothicprakhar">gothicprakhar</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-04-2014</td>
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