<?php require("../../includes/header.php"); ?><h1>Chef and Codes</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/mandarin/CHODE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/russian/CHODE.pdf">Russian</a>.</h3>
<p>Once upon a time chef decided to learn encodings. And, obviously, he started with the easiest one (well, actually the easiest after Caesar cypher) – substitution cypher.<br /><br /><br />
But very soon Chef got bored with encoding/decoding, so he started thinking how to hack this cypher.<br />
He already knows some algorithm, which is not always correct,<br />
but it’s sufficient for now. Here is its description.<br /><br /></p>
<p>Imagine we know frequency sequence of English letters (this means, that letters are sorted by their frequency of appearing in English texts, in ascending order).<br />
And let’s find frequency sequence of cyphered letters (if some of them appear equal number of times, then first in frequency sequence will be lower letter between them).<br />
Now, using this two frequency sequences we can recover plain text. Just substitute cyphered letter with origin one, if they are at same positions in sequences. <br /><br /></p>
<p>Now, Chef has frequency sequence of English letters and cypher text. And he asks you to recover plain text. Please, help him.<br />
</p>
<h3>Input</h3>
<p>In first line number <b>T</b> is given - number of test cases. Then <b>T</b> test cases follow. Each test case consists of two lines - frequency sequence and encrypted text.</p>
<h3>Output</h3>
<p>For each test case you should output decrypted with the given frequency sequence text. Please note, that the case of letters should be preserved. </p>
<h3>Constraints</h3>
<p><ul>
<li> <b>1</b> ≤ <b>T</b> ≤ <b>1000</b>; </li>
<li> Length of frequency sequence is always 26; </li>
<li> <b>1</b> ≤ length of the text ≤ <b>150000</b>; </li>
<li> <b>1</b> ≤ sum lengths of all texts ≤ <b>150000</b>. </li>
<li> Frequency sequence consists of all lowercase English letters. Text consists of any characters. </li>
</ul>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
qwrtyuipasdfgjkzxcvbnmheol
dummy!
bfgjklmopqrstuwxzhvnicdyea
abcd b efgd hbi!
qwrtyuipasdfgjkzxcvbnmheol
Dummy!

<b>Output:</b>
hello!
have a nice day!
Hello!

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witalij_hq ">witalij_hq </a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/white_king">white_king</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-10-2013</td>
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