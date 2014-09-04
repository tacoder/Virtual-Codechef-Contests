<?php require("../../includes/header.php"); ?><h1>Dividing Stamps</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DIVIDING/mandarin/DIVIDING.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/DIVIDING/russian/DIVIDING.pdf">Russian</a> as well.</h3>
<p>
Are you fond of collecting some kind of stuff? Mike is crazy about collecting stamps. He is an active member of <i>Stamp Collecting Сommunity</i>(SCC).
</p>
<p>
SCC consists of <b>N</b> members which are fond of philately. A few days ago Mike argued with the others from SCC. Mike told them that all stamps of the members could be divided in such a way that <b>i</b>'th member would get <b>i</b> postage stamps. Now Mike wants to know if he was right. The next SCC meeting is tomorrow. Mike still has no answer.
</p>
<p>
So, help Mike! There are <b>N</b> members in the SCC, <b>i</b>'th member has <b>C<sub>i</sub></b> stamps in his collection. Your task is to determine if it is possible to redistribute <b>C<sub>1</sub></b> + <b>C<sub>2</sub></b> + ... + <b>C<sub>n</sub></b> stamps among the members of SCC thus that <b>i</b>'th member would get <b>i</b> stamps.
</p>
<h3>Input</h3>
<p>The first line contains one integer <b>N</b>, denoting the number of members of SCC.</p>
<p>The second line contains <b>N</b> integers <b>C<sub>i</sub></b>, denoting the numbers of the stamps in the collection of <b>i</b>'th member.</p>
<h3>Output</h3>
<p>The first line should contain <b>YES</b>, if we can obtain the required division, otherwise <b>NO</b>.
</p>
<h3>Constraints</h3>
<p>1 ≤ <b>N</b> ≤ 100 000;</p>
<p>1 ≤  <b>C<sub>i</sub></b> ≤ 10<sup>9</sup>.</p>
<h3>Examples</h3>
<pre><b>Input:</b>
5
7 4 1 1 2

<b>Output:</b>
YES
</pre><p><br /></p>
<pre><b>Input:</b>
5
1 1 1 1 1

<b>Output:</b>
NO
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kostya_by">kostya_by</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>24-02-2014</td>
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