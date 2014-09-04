<?php require("../../includes/header.php"); ?><h1>Racing Horses</h1><div class="content">

<p>Chef is very fond of horses. He enjoys watching them race. As expected, he has a stable full of horses. He, along with his friends, goes to his stable during the weekends to watch a few of these horses race. Chef wants his friends to enjoy the race and so he wants the race to be close. This can happen only if the horses are comparable on their skill i.e. the difference in their skills is less.</p>
<p>There are <b>N</b> horses in the stable. The skill of the horse <b>i</b> is represented by an integer <b>S[i]</b>. The Chef needs to pick 2 horses for the race such that the difference in their skills is <i>minimum</i>. This way, he would be able to host a very interesting race. Your task is to help him do this and report the minimum difference that is possible between 2 horses in the race.</p>
<h3>Input:</h3>
<p>First line of the input file contains a single integer <b>T</b>, the number of test cases.<br />
Every test case starts with a line containing the integer <b>N</b>.<br />
The next line contains <b>N</b> space separated integers where the <b>i</b>-th integer is <b>S[i]</b>.</p>
<h3>Output:</h3>
<p>For each test case, output a single line containing the minimum difference that is possible.</p>
<h3>Constraints:</h3>
<pre>
1 ≤ <b>T</b> ≤ 10
2 ≤ <b>N</b> ≤ 5000
1 ≤ <b>S[i]</b> ≤ 1000000000

</pre><h3>Example:</h3>
<p><b>Input:</b></p>
<pre>
1
5
4 9 1 32 13

</pre><p><b>Output:</b></p>
<pre>
3

</pre><p>
<b>Explanation:</b> The minimum difference can be achieved if we pick horses with skills 1 and 4 for the race.</p>
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
            <td>2-07-2012</td>
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