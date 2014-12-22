<?php require("../../includes/header.php"); ?><h1>The Loyalty of the Orcs</h1><div class="content">

<p><html> <body></body></html></p>
<h1 style="font-family: Arial;"><small>ACM International Collegiate     Programming Contest, Asia-Amritapuri Site, 2012</small></h1>
<h2>The Loyalty of the Orcs<br /> </h2>
<p> <i>'I think that the enemy brought his own enemy with him,' answered Aragorn. 'These are Northern Orcs from far away.     Among the slain are none of the great Orcs with the strange badges.     There was a quarrel, I guess: it is no uncommon thing with these foul folk. Maybe there was some dispute about the road.'</i> - Aragorn describing the nature of Orcs.</p>
<p> Indeed, everyone knows that the Orcs are treacherous creatures who look for their own satisfaction and more often than not disregard the rules. The only way to keep them in line, is by maintaining the chain of command over a strict hierarchy among the ranks, wherein each Orc is responsible to his immediate superior all the way up to the army's head.</p>
<p> Further, the powers that be, have decided to have regular checks of their army's loyalties, just in case some Orc has been killed and all his juniors end up turning rogue!</p>
<p> There are <b>N</b> orcs, numbered 1 to <b>N</b>, wherein the lead orc is numbered 1.<br /> <b>Step 1.</b> Randomly choose a fixed order in which to test Orcs' loyalties.<br /> <b>Step 2.</b> Going in this order, you make a "roll-call" to check if the current Orc is alive or not.<br /> <b>Step 3.</b> If the current Orc is dead, then he is marked as "deleted".</p>
<p> With this information, it is possible to tell which all Orcs will be loyal, and which won't be. However, cunning Master Wormtongue suggests the following optimization:<br /> In <b>step 2</b>, if any of the considered Orc's superiors (not necessarily immediate superior) is marked as deleted, then the roll-call is not made.</p>
<p> Now, given this algorithm and the hierarchy of the army, along with which Orcs are dead, what is the expected number of roll-calls (taken over all possible orderings in <b>Step 1</b>) that you save by performing this optimization?</p>
<h3>Input (STDIN):</h3>

<p> The first line contains <b>T</b>, the number of test cases.<br /> The first line of each test case contains <b>N</b>, the number of orcs in the army. The next <b>N</b>-1 lines contain two space-separated integers <b>u v</b>, denoting that <b>u</b> is the immediate superior of <b>v</b> or vice-versa. The head of the army is the orc labelled 1. The next line contains <b>m</b>, the number of dead orcs. The next line contains <b>m</b> space separated integers, which are the labels of the dead orcs.</p>
<h3>Output (STDOUT):</h3>

<p> Output one real number for each test case containing the expected number of roll-calls that you save.<b> The results should be accurate within an error range of 10^-6.</b></p>
<h3>Constraints:</h3>

<p> <b>1 &lt;= T &lt;= 5<br /> 1 &lt;= N &lt;= 100,000<br /> 1 &lt;= u, v &lt;= N<br /> u != v<br /> The given set of u-v pairs form a valid chain of command. That means every Orc, except the Orc labeeled 1, has exactly one immediate superior.</b></p>
<p></p>
<h3>Sample Input:</h3>

<p> <span style="font-family: Courier New,Courier,monospace;"> 2<br /> 2<br /> 1 2<br /> 1<br /> 1<br /> 2<br /> 1 2<br /> 1<br /> 2</span></p>
<h3>Sample Output:</h3>

<p> <span style="font-family: Courier New,Courier,monospace;"> 0.5<br /> 0</span></p>
<h3>Notes/Explanation of Sample Input:</h3>

<p> For the first test case, the Orc labelled 1 is dead. The two possible orderings are [1, 2] and [2, 1]. With the optimization, for the order [1, 2], we save the roll-call to 2. So, the total number of roll-calls without the optimization is 4, and with the optimization is 3. Expected number of roll-calls is therefore, (4 - 3) / 2 = 0.5 .<br /> For the second test case, the Orc labeled 2 is dead. Since he does not have any sub-ordinates, the optimization does not have any effect.</p>
<p>  </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-01-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td> - 2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>