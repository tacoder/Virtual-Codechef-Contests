<?php require("../../includes/header.php"); ?><h1>Magic Trick</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/mandarin/MTRICK.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/russian/MTRICK.pdf">Russian</a>.</h3>
<p>Vidhi went to a magic show last week where she was astounded by a magic trick performed by the great Mandwarf, the brown. His trick was as follows :

<ul>
    <li>
    Ask a volunteer from the audience to write down a list <b>L</b> of <b>N</b> integers. 
    </li>

    <li>
    Ask another volunteer from the audience to provide three integers <b>A</b>, <b>B</b>, <b>C</b>
    </li>

    <li>
    Ask another volunteer from the audience to provide <b>N</b> length string called <b>S</b> where each letter is either 'R', 'A' or 'M'
    </li>

    <li>
    Close his eyes for a split second and give the output of The Ancient Algorithm on this input. 
    </li>
</ul></p>

We all know that The Ancient Algorithm is as follows :
<pre>

for <b>i</b> from 1 to <b>N</b> do 

    if <b>i<sup>th</sup></b> letter of <b>S</b> is 'R'
        reverse <b>L</b>[<b>i</b>...<b>N</b>]
    else if <b>i<sup>th</sup></b> letter of <b>S</b> is 'A'
        add <b>A</b> to all numbers of <b>L</b>[<b>i</b>..<b>N</b>].
    else if <b>i<sup>th</sup></b> letter of <b>S</b> is 'M'
        multiply <b>B</b> to all numbers of <b>L</b>[<b>i</b>..<b>N</b>].

    for all number in <b>L</b>[<b>i</b>..<b>N</b>], module them by <b>C</b>.

    announce <b>L</b>[<b>i</b>] out loud

end

</pre>    


<p>Vidhi's boyfriend got jealous when he saw her getting impressed by Mandwarf, the brown's wisdom. He wants to learn the trick to gain her undivided admiration. How about you help him?

<h3>Constraints:</h3>
</p><p>1 ≤ <b>T</b> ≤ 100 <br />
1 ≤ <b>N</b> ≤ 1000<br />
0 ≤ <b>L</b>[<b>i</b>] ≤ 10<sup>18</sup><br />
0 ≤ <b>A</b>,<b>B</b> ≤ 10<sup>18</sup><br />
2 ≤ <b>C</b> ≤ 10<sup>18</sup><br />

<h3>Input</h3>
</p><p>First line contains a single integer <b>T</b>, denoting the number of test cases. Then follow <b>T</b> test case scenarios. Each test case begins with an integer <b>N</b>, the size of the list <b>L</b>. Then in next line, you'd find <b>N</b> space separated integers - the list <b>L</b> itself. In next line, there'd be three space separated integers <b>A</b>, <b>B</b>, <b>C</b> followed by string <b>S</b> in the next line. 

<h3>Output</h3>
</p><p>For each test case you've to output <b>N</b> space separated integers - the numbers announced by Mandwarf, the brown. 

<h3>Example</h3>

<pre>
<b>Input:</b>
2
3
1 1 1
2 3 1000
ARM
4
1 2 3 4
0 1 1000
AMAM

<b>Output:</b>
3 3 9
1 2 3 4
</pre></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/yellow_agony">yellow_agony</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-02-2012</td>
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