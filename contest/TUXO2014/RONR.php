<?php require("../../includes/header.php"); ?><h1>Run Or No Run</h1><div class="content">
<h3> Problem Description</h3>
<p>The T20 Cricket Tournament, Indian League of Premiers is just around the corner….and as usual the favorites are the Coding Super Kings.The team managers are working very hard and the players are also preparing day in and day out.<br />
<br /><br />
One such player is Ash. He is an off-spinner, with plenty of experience to his name in T20 cricket. But Ash this time wants to perform much better than how he did in his previous years. He feels that apart from regular training, he should also look into his previous stats to check where and how he can improve his game. He makes a list of all T20 games he has bowled in. Let this number be <b>‘N’</b>. He then writes down the result of each and every ball he has bowled in all the games. The result can only be a  <b>‘0’</b> or a <b>‘1’</b>. ‘0’ implies a wicket or no(zero) run. ‘1’ implies he has conceded runs. The number of balls in each game can be taken as the variable ‘L’.<br />
<br /><br /><br />
For example:-<br />
<br /><br />
If he has bowled in 2 games, with 5 and 6 balls respectively in each game, he would have made something like this.. 10101, 011010<br />
If some ball has not been specified, like the 6th ball in the former case, then assume it to be ‘0’. The extra ball should be added to the extreme left end.<br />
<br /><br /><br />
Using these details, he wants to find the following…<br />
For each game X in the list of ‘N’ games, if there exists some other game Y such that at the same ball(for all balls in the game) in both X and Y, runs have not been scored off, that is both TOGETHER should NOT be a 1(that is either one of them can be a 1 or none of them can be a 1), then count it. If no such game Y exists for a given X, then do not count it. Now ash wants to count the number of games for which the above condition holds good.</p>
<p><br /><br /><br />
Since Ash is highly experienced, he has bowled a large number of games, he cannot find the answers manually. So he requests you to help him. But Ash also has another condition. He will give you the decimal notation for the balls in each game. For example… 10101 would be represented as 21.</p>
<p><br /><br /><br />
<b>Example 1:</b><br />
<br />For 2 games, 10 and 4. The binary equivalents are 1010 and 100. For the game 10, 4 satisfies the rule that no two balls have got 1 at the same instance. Hence for 10 the answer is 4. Similar explanation can be given for 4 whose answer is 10. So the count will be 2.<br />
<br /><br /><br />
<b>Example 2:</b><br />
<br /><br />
For the case 4, 2, 3 …<br /><br />
4 -&gt; 100 <br /><br />
2 -&gt; 010(Add extra ball to the extreme left)<br /><br />
3 -&gt; 011(Add extra ball to the extreme left)<br /><br />
(4,2) -&gt; satisfies the rule that at no two balls for 4 and 2 exists two 1s.<br /><br />
(4,3) -&gt; satisfies the rule.<br /><br />
(2,4) -&gt; satisfies<br /><br />
(2,3) -&gt; does not satisfy. The 2nd ball from the right are 1s in both the games.<br /><br />
(3,4) -&gt; satisfies<br /><br />
(3,2) -&gt; does not satisfy<br /><br />
Since 4,2 and 3 all satisfy the condition, the answer for this case is 3.</p>
<p><br /><br /><br />
In T20 cricket, the maximum number of balls bowled by a bowler in each game is limited to 24.<br />
Could you solve the above problem for him…? </p>
<h3>Input</h3>
<p>The first line consists of T, the number of testcases. This is then followed by N, the number of games for each testcase. This is then followed by N space separated numbers denoting the decimal equivalent of the score of each game.</p>
<h3>Output</h3>
<p>The Output consists of 1 line representing the answer for each testcase followed by a new line. </p>
<h3>Constraints</h3>
<p>
<br />1 &lt;= T &lt;= 100<br />
<br />1 &lt;= N &lt;= 1,000,000<br />
<br />1 &lt;= L &lt;= 24
</p>
<p><b>Input:</b><br /><br />
3<br /><br />
2<br /><br />
10 4<br /><br />
3<br /><br />
1 2 3<br /><br />
4<br /><br />
2 3 4 5<br /><br /></p>
<p> </p>
<p><b>Output:</b><br /><br />
2<br /><br />
2<br /><br />
4<br /></p>
<p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tusharmakkar08">tusharmakkar08</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-04-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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