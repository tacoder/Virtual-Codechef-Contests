<?php require_once("../../includes/header.php"); ?><h1>Hugphile Order</h1><div class="content">
<p><span>MCG (Melbourne Cricket Ground) is hosting the finals of the Cricket World Cup 2015. In order to capture shots of boundary hits and balls being rubbed on pants with equal clarity, the organizers have decided to arrange n cameras of different resolutions at n different positions on a vertical stand according to a 'Hugphile Order', in remembrance of Phil Hughes.</span></p>
<p>In a Hugphile Order, the cameras are ordered linearly on a vertical stand at positions p1 to pn, such that the camera at position pi (for i = 2..n) has higher resolution than the camera at position p(i/2), where / stands for integer division.<br />  <br /> Assuming that the resolutions of the n cameras are in the range 1 to n (both inclusive) and given a camera with resolution m, find the number of possible positions where it can be placed on the stand such that the cameras are in Hugphile Order.</p>
<p><strong>Input:</strong><br /> First line contains number of testcases, T.<br /> Each of the next T lines contain two space-separated integers, n and m</p>
<p><strong>Output:</strong><br /> Print the answer for each test case on a separate line.</p>
<p><strong>Constraints:</strong><br /> 1 &lt;= T &lt;= 10^5<br /> 1 &lt;= n &lt;= 10^18<br /> 1 &lt;= m &lt;= n</p>
<p> <strong>Sample Input:</strong><br /> 3<br /> 2 1<br /> 4 2<br /> 5 3</p>
<p><strong>Sample Output:</strong><br /> 1<br /> 2<br /> 4</p>
<p>Explanation:<br /> For the first example, camera with resolution 1 can come at position p1 only.<br /> For the third example, camera with resolution 3 can come at any position except position p1.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/murdocc007">murdocc007</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-12-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.9.2, CPP14, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require_once("../../includes/footer.php"); ?>