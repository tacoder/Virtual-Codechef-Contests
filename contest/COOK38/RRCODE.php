<?php require("../../includes/header.php"); ?><h1>Code</h1><div class="content">
<p>You are given a simple code of a function and you would like to know what it will return.</p>
<pre><code>
 F(<b>N, K, Answer, Operator, A[N]</b>) returns int;
  begin
      for <b>i</b>=1..<b>K</b> do
         for <b>j</b>=1..<b>N</b> do
            <b>Answer</b>=(<b>Answer</b> operator <b>A<sub>j</sub></b>)
       return <b>Answer</b>
  end
</code></pre>
<p><br /> <br /><br /></p>
<p>Here <b>N, K, Answer</b> and the value returned by the function <b>F</b> are integers; <b>A</b> is an array of <b>N</b> integers numbered from <b>1</b> to <b>N</b>; <b>Operator</b> can be one of the binary operators <b>XOR, AND</b> or <b>OR</b>. If you are not familiar with these terms then better have a look at following articles: <a href="http://en.wikipedia.org/wiki/Bitwise_operation#XOR">XOR</a>, <a href="http://en.wikipedia.org/wiki/Bitwise_operation#OR">OR</a>, <a href="http://en.wikipedia.org/wiki/Bitwise_operation#AND">AND</a>.</p>
<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b> - the number of test cases in file. Description of each test case consists of three lines. The first one contains three integers <b>N, K</b> and initial <b>Answer</b>. Array <b>A</b> is given in the second line and <b>Operator</b> is situated on the third one. Operators are given as strings, of capital letters. It is guaranteed that there will be no whitespaces before or after <b>Operator</b>.</p>
<h3>Output</h3>
<p>Output one line for each test case - the value that is returned by described function with given arguments.</p>
<h3>Constraints</h3>
<ul>
<li><b>1≤T≤100 </b></li>
<li><b>1≤N≤1000<br /> </b></li>
<li><b>0≤Answer, K, A<sub>i</sub>≤10<sup>9</sup></b></li>
<li> <b>Operator</b> is one of these: <b>"AND", "XOR", "OR"</b>. </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 1 0
1 2 3
XOR
3 1 0
1 2 3
AND
3 1 0
1 2 3
OR
<b>Output:</b>
0
0
3
</pre>
<p> </p>
<h3>Explanation</h3>
<p>0 xor 1 xor 2 xor 3 = 0<br /><br /> 0 and 1 and 2 and 3 = 0<br /><br /> 0 or 1 or 2 or 3 = 3</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/utkarsh_lath">utkarsh_lath</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-09-2013</td>
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