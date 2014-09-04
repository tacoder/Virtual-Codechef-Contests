<?php require("../../includes/header.php"); ?><h1>Preferred Cooking Schools</h1><div class="content">

<p align="justify">Did you know that the famous chef Ramsay gets paid around 23 million US dollars a year ? Yes, you heard it right, thats over 100 crore Indian Rupees a year. Having read this in News paper, Mr.Nagulu from Hyderabad decides to get his two sons join a Culinary school. There are <b>N</b> schools in total, with varying distances <b>D</b> from his home and with varying fee <b>F</b> they collect. As the number of schools is huge, he would like to prepare a list of preferred schools before he starts his school hunt.
</p>
<p align="justify">
Mr.Nagulu prefers school X over school Y if X is at a distance less than or equal to Y and X collects fees less than or equal to Y. Also, a school cannot be preferred over itself<br />
Consider a set A of schools: a school X is termed 'Special A' if there is no school in A that is preferred over X. 'Max Special A' is the maximal subset of A such that every school in 'Max Special A' is 'Special A'. He wants to consider only some schools, based on how much fee he can pay and at most how far he can send his sons. But, he has a lot of such queries for you, each of them specifying 3 conditions, <b>maxDistance</b> ( he can send his sons not farther than maxDistance ), <b>maxFee</b> ( he can pay at most maxFee ) and <b>minFee</b> ( he wants to pay at least minFee ; you know... Indian father, prestige issues ! ;-) ).
</p>
<p align="justify">In each of his queries, he wants you to consider only a set S of schools that satisfy the given 3 conditions and all you need to do is just count the maximum number of schools that can be in a 'Max Special S'.</p>
<h3>Notes</h3>
<p>If school X has distanceX &amp; feeX and school Y has distanceY &amp; feeY, then Mr.Nagulu prefers school X over school Y if and only if ( distanceX &lt;= distanceY AND feeX &lt;= feeY ). You can assume that no two schools have both distance and fee equal. Also, a school can not be preferred over itself.</p>
<h3>Input</h3>

<p>First line contains an integer N ( total number of schools 1 &lt;= <b>N</b> &lt;= 100,000 ). Each of the next N lines contains D F ( D is the distance and F is the fee of each school, 1 &lt;= <b>D</b>, <b>F</b> &lt;= 1,000,000,000 and no two schools have both distance and fee equal. ) Next line has an integer Q ( number of queries 1 &lt;= Q &lt;= 100,000 ). Each of the next Q lines describe a query, having maxDistance minFee  maxFee ( as described in the problem, 1 &lt;= <b>maxDistance</b>, <b>minFee</b>, <b>maxFee</b> &lt;= 1,000,000,000 and minFee &lt;= maxFee ). </p>
<h3>Output</h3>

<p>For each query, print the answer in a new line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
1 1
2 2
4 3
3 4
1 5
5
5 3 4
5 4 6
5 1 4
3 1 4
4 2 6

<b>Output:</b>
2
2
1
1
2
</pre><p>
<b>Explanation : <br /></b> Listing the schools in 'Max Special S' for each of the queries in the given sample case. Schools are listed in (distance, fee) pairs.<br />
5 3 4  --&gt; (4,3) (3,4) ; <br />
5 4 6  --&gt; (3,4) (1,5) ; <br />
5 1 4  --&gt; (1,1) ; This school is preferred over all other schools ;<br />
3 1 4  --&gt; (1,1) ; <br />
4 2 6  --&gt; (2,2) (1,5) ; (2,2) is preferred over (3,4) and (4,3)</p>
<p>
<i><b>Warning : </b> Large input / output. You may have to use efficient input / output methods if you are using languages with heavy input / output overload. Eg: Prefer using scanf/printf to cin/cout for C/C++</i></p>
<p><i><b>Note : </b>There are multiple test sets, and the judge shows the sum of the time taken over all test sets of your submission, if Accepted. Time limit on each test set is 3 sec</i></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/flying_ant">flying_ant</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/masked_zorro">masked_zorro</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-05-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
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