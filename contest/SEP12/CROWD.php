<?php require("../../includes/header.php"); ?><h1>Three is Crowd</h1><div class="content">

<p><i>Two's company, three's a crowd!</i></p>
<p>It's been one year since Chef met his brother. Last year, his younger brother came to visit him during this time of the year. This year, the Chef is planning to go visit his brother. Chef's brother has planned to throw a "Welcome Party" for him. He wants to invite people from his neighbourhood (i.e. from the street where he lives). There are <b>N</b> houses on the street in a single line (not considering the brother's house). He wants the party to be fun and he will not like to invite people who might spoil the mood of the party. If people are invited from three consecutive houses on the street, they might create trouble. As they say, three's a crowd! He doesn't want to ruin the Chef's <i>Welcome Party</i> and so he will not want to send invites to <i>any</i> three consecutive houses. He wants you to tell him how many ways are there for him to go wrong. Note that he can play safe by not inviting anyone to avoid a <i>crowd</i>.</p>
<h3>Input:</h3>
<p>First line of the input contains a single integer <b>T</b>, the number of test cases.<br/><br />
Each test case contains a line containing a single integer <b>N</b> described above.</br/></p>
<h3>Output:</h3>
<p>For each test case output a single integer denoting the number of ways the brother can go wrong with planning the party.<br/><br />
The answer can get quite large. So output the total number of ways modulo 10<sup>9</sup>+7.</br/></p>
<h3>Constraints:</h3>
<pre>
1&lt;=<b>T</b>&lt;=10000
1&lt;=<b>N</b>&lt;=10<sup>15</sup>

</pre><h3>Example:</h3>
<p><b>Input:</b></p>
<pre>
2
3
4

</pre><p>
<b>Output:</b></p>
<pre>
1
3

</pre><p>
<b>Explanation:</b><br />
<i>Case 1:</i> The only way he can go wrong is by inviting all the houses.<br/><br />
<i>Case 2:</i> First way of getting wrong is by inviting houses (1,2,3). Second way to get wrong is by inviting houses (2,3,4). Third way of going wrong is by inviting all 4 houses i.e. (1,2,3,4).</br/></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vamsi_kavala">vamsi_kavala</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-08-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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