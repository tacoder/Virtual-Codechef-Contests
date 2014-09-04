<?php require("../../includes/header.php"); ?><h1>Help the DJ</h1><div class="content">

<p style="text-align: justify;">DJ N3xt0r could hardly sleep last night. He thought he was doing his job so well, but it seems like the dancers at the disco are looking for a whole different kind of music these days and the place has become nearly empty. Being the best DJ ever, he would not let that happen again. So he pulled some strings and gathered valuable information regarding the musical preferences of the dancers expected to attend the disco tonight. By 8.00PM, DJ N3xt0r has a file with the following info:</p>
<ul>
<li>The number of dancers (D) expected to attend tonight.</li>
<li>The number of songs (S) on his laptop media library.</li>
<li>The boredom factor (B) of the dancers: the number of songs disliked by a dancer that will play before he gets bored and leaves the disco.</li>
<li>The musical preferences of the dancers represented by a D-row S-column matrix (M). If M<sub>ij</sub> = 1 then dancer i likes song j. If M<sub>ij</sub> = 0 he does not like the song.</li>
</ul>
<p style="text-align: justify;">He wants to build a playlist such that the number of dancers present when the party ends is maximized. Desperate, DJ N3xt0r seeks for your help. He will make you a VIP member of the disco if you write a program that performs the task. Notice that, as the playlist will be projected on a screen, dancers who don't see any song they like will leave immediately.</p>
<h3>Input</h3>
<p style="text-align: justify;">Input starts with two integers (1 &lt;= D, S &lt;= 500) separated by a single space. The next line contains the boredom factors of the dancers (1 &lt;= B<sub>1</sub>, B<sub>2</sub>&hellip;, BD &lt;= S) separated by single spaces. The next D lines describe the M matrix. Each line represents the musical preferences of a dancer, and will consist of S binary integers (0, 1) separated by single spaces.</p>
<h3>Output</h3>
<p style="text-align: justify;">Print the number of songs selected (P) for the playlist on a single line. Then print P integers, each one on a single line, indicating the songs selected, in any order. Notice that selecting a song more than once is not something a self-respecting DJ would ever do, so this will lead to Wrong Answer. The song numbers start from 0, i.e., print 0 when selecting the first song and S-1 when selecting the last.</p>
<h3>Scoring</h3>
<p style="text-align: justify;">Points scored for a single test will equal the number of dancers present when the party ends according to your playlist. The total score of the program is the sum of points scored in all tests.</p>
<h3>Example</h3>
<pre><strong>Input:</strong><br />4 5<br />2 3 3 4<br />1 0 0 0 0<br />0 0 1 0 0<br />1 1 1 0 1<br />0 1 0 0 0<br /><strong>Output:</strong><br />3<br />0<br />4<br />1<strong><br />Scoring:</strong><br />2</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-10-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 - 15 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>