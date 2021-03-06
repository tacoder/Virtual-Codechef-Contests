<?php require("../../includes/header.php"); ?><h1>Byteknights and Byteknaves</h1><div class="content">

<p>A long school holiday has come, and you decided to visit the famous Byte Island. You know there are only two types of Bytelandians: Byteknights and Byteknaves. A Byteknight always tells the truth, whereas a Byteknave always lies.</p>
<p>It is known that there are <i>N</i> Bytelandians in the island, and now you meet all of them. You are curious about their types. Because you are a smart logician, you don't want to ask them questions that immediately reveal their types (that's too boring). Instead, to each Bytelandian you ask, "How many Byteknights are there here?"</p>
<p>To your surprise, they also don't answer your questions directly. Instead, the <i>i</i>-th Bytelandian answers of the form "The number of Byteknights here is between <i>a<sub>i</sub></i> and <i>b<sub>i</sub></i>, inclusive". You record all answers in your pocket note.</p>
<p>Now that you have collected all information you need, determine the type of each Bytelandian.</p>
<h3>Input</h3>
<p>The first line contains a single integer <i>T</i>, the number of test cases. <i>T</i> test cases follow. The first line of each test case contains a single integer <i>N</i>. <i>N</i> lines follow. The <i>i</i>-th line contains two integers <i>a<sub>i</sub></i> and <i>b<sub>i</sub></i>.</p>
<h3>Output</h3>
<p>For each test case, output two lines. In the first line, output a single integer indicating the number of different solutions, modulo 1000000007. In the next line, output the lexicographically smallest solution. A solution is a string consisting of <i>N</i> characters, where the <i>i</i>-th character of the string is '1' if the <i>i</i>-th Bytelandian is a Byteknight, or '0' in case of a Byteknave. It is guaranteed that there is at least one valid solution.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
1
0 1
4
1 4
2 4
3 4
4 4
3
1 2
0 0
1 3

<b>Output:</b>
1
1
5
0000
1
101
</pre><h3>Constraints</h3>
<ul>
<li>1 &lt;= <i>T</i> &lt;= 5</li>
<li>1 &lt;= <i>N</i> &lt;= 50000</li>
<li>0 &lt;= <i>a<sub>i</sub></i> &lt;= <i>b<sub>i</sub></i> &lt;= <i>N</i></li>
</ul>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/fushar">fushar</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-10-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>