<?php require("../../includes/header.php"); ?><h1>Music & Lyrics</h1><div class="content">
<p>Chef Sridhar listenes to music while cooking. He realized that the lyrics of many songs contain the same words. He thought of a task to do in his leisure; pick a set of words and find the frequency of the words in the lyrics of various songs.</p>

<p>A word A from the lyrics is said to match a given word W if W is a substring of A.</p>

<p><b>Note</b> Some words from the lyrics can match multiple given words. For e.g, <b>shawty</b>, matches both <b>shawty</b> as well as <b>hawt</b>. The word <b>shawty</b> in the lyrics must be counted in the frquency of <b>shawty</b> as well as <b>hawt</b>.</p>

<p>You may assume that all the comparisons must be case sensitive. Also, there are no whitespaces within a word in the given list, or in the lyrics. Words in the lyrics are separated by <b>"-"</b> characters (of course without the quotes).</p>

<h3>Input</h3>
<p>First line contains an integer <b>W</b>, denoting the number of words Chef has decided to find the frequencies of. Then follow <b>W</b> lines containing a word (<b>P</b>) each. The next line contains <b>N</b>, the number of lyrics Chef decided to index. Followed by <b>N</b> lines containing a string (<b>S</b>) which chef has to index. You can assume that <b>S</b> doesn't contain any <b>whitespace</b> characters.</p>

<h3>Output</h3>
<p>The output contains <b>W</b> lines each denoting the frequency of the respective word in all of the lyrics together.</p>

<h3>Constraints</h3>
<p>
<b>1 ≤ W ≤ 500</b><br />
<b>1 ≤ |P| ≤ 5000</b>, where <b>|P|</b> denotes length of each word.<br />
<b>1 ≤ N ≤ 100</b><br />
<b>1 ≤ |S| ≤ 50000</b>, where <b>|S|</b> denotes the length of lyric of each song.<br />
All the characters will be either uppercase or lowercase english alphabets or numbers or <b>"-"</b>.
</p>

<h3>Examples</h3>
<pre>
<b>Sample Input 1</b>
5
he
she
sher
his
hers
2
ushers
she-said-he-said-she-said-he-said-his

<b>Sample Output 1</b>
5
3
1
1
1


<b>Sample Input 2</b>
3
who
shawty
hawt
2
Get-it-shawty-Get-it-shawty
Whoa-W-W-Whoa-Shawtyyyyy

<b>Sample Output 2</b>
0
2
3

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kaushik_iska">kaushik_iska</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/white_king">white_king</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-06-2012</td>
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