<?php require("../../includes/header.php"); ?><h1>Minion Circle</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME11/mandarin/CIRCLE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME11/russian/CIRCLE.pdf">Russian</a>.</h3>
<p>El Macho's army of mutated minions is marching towards Gru, the army is standing in a rectangular formation measuring <b>NxM</b>. The spray of antidotes done by Gru has turned some of the minions back to normal, but now they are trapped within the army of mutated ones. Formally, a normal minion is <i>"not trapped"</i> if :<br /><br />
1) either he is on one of the edges of the rectangle<br /><br />
2) or one of his direct neighbors (directly in front/back of him, or left/right of him) is <i>not trapped</i>.<br /><br />
<br /><br />
Any trapped minion will be killed by the mutated minions, which Gru cannot let happen. Gru will use his antidote ray to turn exactly one row and one column of the army to normal minions. If there are any normal minions in that row or column, they remain unaffected. Can Gru select a row and a column such that no normal minion remains trapped after the antidote ray?<br /><br />
<br /><br />
<b>INPUT:</b><br /><br />
First line contains <b>T</b>, number of testcases<br /><br />
Each testcase starts with a line containing two space separated integers <b>N</b> and <b>M</b>.<br /><br />
N lines follow, each containing M characters. jth character of the ith line is <b>"B"</b> if the minion at ith row and jth column in the army is mutated, <b>"W"</b> otherwise.<br /><br />
<br /><br />
<b>OUTPUT:</b><br /><br />
Print "YES or "NO" (quotes for clarity) to indicate wheather it is possible for Gru to save the trapped minions.<br /><br />
<br /><br />
<b>CONSTRAINTS:</b><br /><br />
1&lt;=T&lt;=10<br /><br />
30 points : 1&lt;=N,M&lt;=100<br /><br />
70 points : 1&lt;=N,M&lt;=1000<br /><br />
<br /><br />
<b>SAMPLE INPUT:</b><br /><br />
1<br /><br />
3 3<br /><br />
BBB<br /><br />
BWB<br /><br />
BBB<br /><br />
<br /><br />
<b>SAMPLE OUTPUT:</b><br /><br />
YES<br /><br />
<br /><br />
<b>EXPLAINATION:</b><br /><br />
Any row and column pair selected by Gru guarantees that the trapped minion does not remain trapped.<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/piyushkumar">piyushkumar</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/balajiganapath">balajiganapath</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-04-2014</td>
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