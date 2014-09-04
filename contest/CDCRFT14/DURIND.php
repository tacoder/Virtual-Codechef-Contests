<?php require("../../includes/header.php"); ?><h1>Durins Day</h1><div class="content">
<p>Reference:: The Hobbit : Desolation of Smaug<br />
  <a href="&lt;br" />
    'http://en.wikipedia.org/wiki/The_Hobbit:_The_Desolation_of_Smaug'&gt;http://en.wikipedia.org/wiki/The_Hobbit:_The_Desolation_of_Smaug</a></p>
<p>  J. R. R. Tolkien decided to make Thorin Oakenshield’s task more difficult.<br />
  This time he was given an infinite number of keys represented by a small<br />
  string. The hidden entrance has a lot of keyholes side by side represented by<br />
  one long string. The key fits only into a slit that matches it completely.<br />
  Oakenshield does not know how many keys he would require and which all<br />
  keyholes he will have to try out. So if there are <b>n</b> keyholes where the key<br />
  fits, he might need any number of keys between <b>1 to n</b> (both inclusive).<br />
  Moreover he does not know which keyholes among the ones where the keys fit, he<br />
  will have to use. All he knows is that there is a unique way to open the door.<br />
  Trying out each configuration takes <b>1</b> second. The last light of Durin’s day<br />
  does not last long and will have to try out all possibilities before it goes.<br />
  He wants you to find out how long, in the worst case, it will take for him to<br />
  try out all possibilities.</p>
<p>  Since the answers may be huge, output it modulo <b>1000000007</b>.<br />
  If there are no keyholes where the key fits, output <b>0</b>.
  </p>
<h3>Input Format:</h3>
<p>
  First line containing a string representing the key.<br />
  Second line containing a string representing the keyholes.
  </p>
<h3>Output Format:</h3>
<p>
  Single line containing an integer for the required answer.
  </p>
<h3>Notes:</h3>
<p>
  1. Key fits into a keyhole at index <b>i</b> if key is a substring of keyhole string<br />
  at index <b>i</b>.<br />
  2. If there are two overlapping keyholes where the key may fit, you cannot<br />
  insert a key in both simultaneously
  </p>
<h3>Constraints:</h3>
<p><b><br />
  1 &le; key &le; 10^4<br />
  1 &le; keyholes &le; 5*(10^5)<br /></b>
	</p>
<h3>Sample Input:</h3>
<pre>
c
a	</pre><h3>Sample Output:</h3>
<pre>
0</pre><h3>Sample Input:</h3>
<pre>
aba
abababa</pre><h3>Sample Output:</h3>
<pre>
4</pre><h3>Explanation:</h3>
<p></p><p><b>Explanation for Test Case #1:<br /></b><br />
  The key fits into keyholes at positions {1, 3, 5}<br />
  If he requires only 1 key he may put them at {1} or {3} or {5} = 3 seconds.<br />
  If he required 2 keys, he may put them at {1,5} = 1 second.<br />
  Total = 1+3 = 4 seconds.<br />
  He cannot use 3 keys without overlapping them.</p>
<p> <b> Explanation for Test Case #2:<br /></b><br />
  There is no slit where the key fits hence 0 seconds.</p>

<p><br />
<b>Problem Setter: Vidit Gupta</b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/darkshadows">darkshadows</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-01-2014</td>
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