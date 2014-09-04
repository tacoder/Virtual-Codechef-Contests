<?php require("../../includes/header.php"); ?><h1>Sherlock and the Great Game</h1><div class="content">
<p> </p>
<p>
Sherlock: "Why are you doing this?"<br /></p>
<p>Moriarty: "I like to watch you dance."<br /><br /></p>
<p>Sherlock is now facing the biggest challenge of his life. Having placed bombs in various important checkpoints in London, Moriarty is planning to have more than his share of fun.</p>
<p>Sherlock has deduced that the checkpoints form a network with the property that it is possible to reach any checkpoint from any other checkpoint, using a unique path. Moriarty has assigned an initial value to every checkpoint. Furthermore, he can choose any pair of checkpoints <b>(A,B)</b>, and add a constant <b>C</b> to the value of every checkpoint on the path from <b>A</b> to <b>B</b> (both inclusive). This addition is done modulo 10. At any point of time, Moriarty can ask Sherlock to answer how many checkpoints on the path between a given pair of checkpoints (both inclusive), have a prime number value. Even a minor error in Sherlock’s answers, will lead to the bombs being triggered. Realizing the intensity and magnitude of the task, Sherlock decides to outsmart Moriarty by writing a computer program.</p>
<p>It is your job to help Sherlock protect London from destruction.
</p>
<p> </p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains the number of checkpoints in the network: N</li>
<li>The second line contains <b>N</b> space separated integers Vi denoting the initial value of every checkpoint</li>
<li>The next <b>N-1</b> lines contain space-separated integers <b>u v</b>, to signify an edge between checkpoints <b>u and v</b></li>
<li>The next line contains the number of operations: <b>Q</b></li>
<li>The next <b>Q</b> lines each contain one of two types of operations given below:</li>
<ol>
<li><b>0 A B</b> – This denotes a query operation to return the count of prime values on checkpoints in the unique path from checkpoint <b>A</b> to checkpoint<br />
<b>B</b> (both inclusive).</li>
<li><b>1 A B C</b> – This denotes an update operation of adding <b>C</b> to the value on each of the vertices on the unique path from checkpoint <b>A</b> to checkpoint <b>B</b> (both inclusive). This addition is performed modulo 10.</li>
</ol>
</ul>

<h3>Output</h3>
<ul>
<li>For each query of the form <b>0 A B</b>, print on a separate line, the total number of primes on vertices in the unique path from <b>A to B</b> (both inclusive).</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li><b>0</b> ≤ <b>V[i]</b> ≤ <b>9</b></li>
<li><b>1</b> ≤ <b>u,v</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>A,B</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>C</b> ≤ <b>10000</b></li>
<li><b>A</b> is not equal to <b>B</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
<p>
10
1 0 0 9 1 7 2 3 3 7 
3 7
1 8
10 5
8 4
5 1
9 7
6 7
2 7
7 4
5
0 1 10
0 2 4
0 4 10
1 5 3 3714
0 1 8

</p>

<b>Output:</b>
<p>
1
1
2
2

</p>
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iiti_adm">iiti_adm</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>31-01-2014</td>
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