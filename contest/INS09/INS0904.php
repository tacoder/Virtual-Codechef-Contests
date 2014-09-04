<?php require("../../includes/header.php"); ?><h1>MICAPOKALEBE</h1><div class="content">

<p>
Our friend Hannibal from NITK Surathkal was one of the k participants in the elite tournament Micapokalebe. The rules of the game to decide the ranking of the players for the tournament are as follows. There are n stacks of coins. The <i>i</i><sup>th</sup> stack  has <i>x(i)</i> coins. Each player gets to choose any one stack and pick any available number of coins greater than zero from that stack. The player who  is unable to pick any coin from any stack during his move is the last(worst) ranked player. The players following him in order by turn will be considered second last ranked player, third last ranked player etc. Hannibal is asked to play first. Hannibal decides that he will not protest unless his tournament rank is bound to be the worst. Assuming all players in the tournament are rational and want to achieve the best rank possible, your job is to advice Hannibal with a simple "Yes" or "No" answer asking to protest or not to protest respectively given a configuration of the stacks.</p>
<h3>Input</h3>

<p>
The first line give <i>t</i>, the number of test cases (<i>t</i> ≤ 250),<br />
Then <i>t</i> test cases follow. </p>
<p>For each test case:<br />
The first line gives 2 integers <i>n k</i>, denoting the number of stacks and number of participants respectively.<br />
The next line gives <i>n</i> integers <i>x(1) x(2) x(3) .... x(n)</i> denoting the number of coins in each stack.</p>
<p>(1 ≤ <i>k</i> ≤ <i>n</i> ≤ 10<sup>5</sup>)<br />
(1≤ <i>x(i)</i> ≤10<sup>9</sup>)</p>
<h3>Output:</h3>
<p>For each test case output a single line.<br />
"Yes" if he has to protest , "No"  if he shouldn't</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
5 4
6 4 2 1 2
5 2
5 6 3 1 6

<b>Output:</b>
No
Yes
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/fctrl">fctrl</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-10-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>