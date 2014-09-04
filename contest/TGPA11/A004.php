<?php require("../../includes/header.php"); ?><h1>The Battle</h1><div class="content">

<p>Now that the location of the Frigates and the Mother-ship has been determined , it is time to take back the Empire . In the final battle against the invaders , the Empire has the option of using the BIOTELEPORT weapon .<br />
It is prototype and is not perfect .</p>
<p>What the weapon does is , it teleports a given number of targets ( let us say T1 ) to a given location , but since the weapon is not perfect , if MORE SUCH TARGETS ARE PRESENT , it TELEPORTS BACK a certain number of targets (say C1 ) that it had teleported previously , to their original location .</p>
<p>The weapon has two configurations :</p>
<p>First configuration teleports T1 targets and teleports back C1 targets ( T1 > C1 ) .<br />
Second configuration teleports T2 targets and teleports back C2 targets (T2 > C2 ) .</p>
<p>The configurations can be interchanged when ever required .</p>
<p>The weapon also has certain limitations .</p>
<p>It can be used only when a minimum number of targets T1 or T2 , as the case may be , are present .</p>
<p>It needs to be decided whether it is possible to eliminate the enemies completely using the weapon in these two configuration from the galaxy .</p>
<h3>Input</h3>
<pre>
n 
N1 T1 C1 T2 C2
N1 T1 C1 T2 C2
..........
..........
..........
n times

</pre><p>
<b>Where :</b> </p>
<p>n   : Number of test cases <br />
N  : Total number of targets .<br />
T1: Teleportation capability of the first configuration of the weapon .<br />
C1: Back Teleportation of the first weapon .<br />
T2 : Teleporttion capability of the second configuration of the weapon .<br />
C2 : Back Teleportation of the second weapon .</p>
<p>All values being integers in between 0 and 1000 .</p>
<h3>Output</h3>
<p>POSSIBLE or IMPOSSIBLE for each test case on a single line .</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
25 1 0 17 3
213 99 6 74 22

<b>Output:</b>
POSSIBLE
IMPOSSIBLE
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/roy">roy</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-02-2011</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>