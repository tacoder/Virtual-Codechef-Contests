<?php require("../../includes/header.php"); ?><h1>Save The Princess</h1><div class="content">
<p>Shiro is leading an army to save the princess of his kingdom "Abra". The princess has been made a prisoner by the neighboring kingdom "Kadabra". Kadabra is a magical land and is full of challenges. Shiro's army has to pass <b>N</b> levels before they can get to the princess. After each level, the army gets a few flags to carry along. The flags can either all be of kindom Abra OR all of kingdom Kadabra. The magic of Kadabra forces Shiro's army to carry the flags irrespective of which kingdom they belong to. The princess doesn't know Shiro or anyone from his army. She will not escape with them unless she can trust them. She will trust them only if the number of Abra's flags they are carrying is atleast as much as the number of Kadabra's flags.</p>
<p>The army gets <b>a<sub>i</sub></b> flags at the end of the i<sup>th</sup> level. Probability that flags received at the end of the i<sup>th</sup> level will be Abra's flags is <b>p<sub>i</sub></b>. Your task is to tell Shiro what is the probability that the princess will trust him once they reach her.</p>
<h3>Input:</h3>
<p>First line of input contains a single integer <b>T</b>, the number of test cases.<br /><br />
Each test starts with a single line having an integer, <b>N</b>, the number of levels in Kadabra.<br /><br />
Next line contains contains <b>N</b> integers with the i<sup>th</sup> integer being <b>a<sub>i</sub></b> as described above.<br /><br />
Next line contains contains <b>N</b> integers with the i<sup>th</sup> integer being <b>p<sub>i</sub></b> as described above. Note that the probabilities given will be in percents.<br /></p>
<h3>Output:</h3>
<p>For each test case, output a line containing the required probability. The answer will be accepted if the relative error is not more than 10<sup>-6</sup>.<br /></p>
<h3>Constraints:</h3>
<pre>
1 ≤ <b>T</b> ≤ 100
1 ≤ <b>N</b> ≤ 100
1 ≤ <b>a<sub>i</sub></b> ≤ 100
0 ≤ <b>p<sub>i</sub></b> ≤ 100

</pre><h3>Example:</h3>
<p><b>Input:</b></p>
<pre>
2
5
1 2 3 4 4
0 100 100 0 50
2
5 5
50 60

</pre><p><b>Output:</b></p>
<pre>
0.5000000
0.8000000


</pre><p>
<b>Update:</b></p>
<p>Difference in answer upto 1e-6 will be ignored.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vamsi_kavala">vamsi_kavala</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/white_king">white_king</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-03-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
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